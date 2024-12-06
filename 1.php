<?php
$directory = '/home/alexsid/dev/php/TF/skb-kontur'; // Укажите путь к директории с PHP файлами    #[VersionMethod('1')]
function getPhpFiles($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }
    
    return $files;
}
#[VersionMethod('1')]
function findClassesAndMethods($files) {
    $classInfo = [];
    
    foreach ($files as $file) {
        $content = file_get_contents($file);
        
        // Находим все классы и их родительские классы
        preg_match_all('/class\s+(\w+)(?:\s+extends\s+(\w+))?/', $content, $classMatches);
        preg_match_all('/function\s+(\w+)\s*\(/', $content, $methodMatches);
        
        foreach ($classMatches[1] as $index => $className) {
            $parentClass = isset($classMatches[2][$index]) ? $classMatches[2][$index] : null;
            $methods = $methodMatches[1]; // Все методы в текущем файле
            
            if ($parentClass) {
                $classInfo[$className] = [
                    'parent' => $parentClass,
                    'methods' => $methods,
                    'file' => $file
                ];
            }
        }
    }
    
    return $classInfo;
}

function getMissingParentClasses($dir) {
    $files = getPhpFiles($dir);
    $classInfo = findClassesAndMethods($files);
    $missingClasses = [];

    // Проверка отсутствия файлов для родительских классов
    foreach ($classInfo as $class => $info) {
        $parentClass = $info['parent'];
        $parentClassFile = $dir . '/' . str_replace('\\', '/', $parentClass) . '.php'; // Формируем путь к файлу
        
        if (!file_exists($parentClassFile)) {
            $missingClasses[] = [
                'parentClass' => $parentClass,
                'methods' => $info['methods'],
                'childClassFile' => $info['file']
            ]; // Добавляем информацию о родительском классе
        }
    }

    return $missingClasses; // Возвращаем список отсутствующих классов
}

$ignoreMissingClass= require'ignoreMissingClass.php';


// Укажите путь к директории
//$directory = 'path/to/your/php/files';
$missingParentClasses = getMissingParentClasses($directory);

$filteredMissingClass = array_filter($missingParentClasses, function($item) use ($ignoreMissingClass) {
    return !in_array($item['parentClass'], $ignoreMissingClass);
});


$missingParentClasses = $filteredMissingClass;

// Выводим результат
foreach ($missingParentClasses as $missingClass) {
    echo "Отсутствующий родительский класс: " . $missingClass['parentClass'] . "\n";
    echo "Методы, которые он расширяет: " . implode(', ', $missingClass['methods']) . "\n";
    echo "Файл класса, который наследуется: " . $missingClass['childClassFile'] . "\n\n";
}
file_put_contents("serchedFiles.php","<?php\n".'$serched_arr='.var_export($missingParentClasses,1));