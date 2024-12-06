<?php
#[VersionMethod('1')]
function getPhpFiles($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }

    return $files;
}    #[VersionMethod('1')]
function processFiles($files) {
    foreach ($files as $file) {
        $content = file_get_contents($file);
        $newContent = $content;

        // Проверяем наличие атрибута #[VersionClass('1')]
        if (!preg_match('/#[ ]*VersionClass\(*\)/', $content)) {
            // Добавляем атрибут #[VersionClass('1')] перед первым объявлением класса
            $newContent = preg_replace('/\s*(abstract|final)?\s*(class\s+\w+)/', "\n#[VersionClass('1')]$0", $newContent);
        }

        // Добавляем атрибут #[VersionMethod('1')] ко всем методам, если он отсутствует
        $newContent = preg_replace_callback(
            //'/(\[\s*VersionClass*)?\s*(public|protected|private|abstract|final)?\s*(function\s+\w+\s*\(.*?\)\s*{)/',
            '/(\[\s*VersionMethod\s*\(.*?\)\s*\])?\s*(\[\s*VersionClass\s*\(.*?\)\s*\])?\s*(public|protected|private|abstract|final)?\s*(function\s+\w+\s*\(.*?\)\s*{)/m',
            function($matches) {
                print_r($matches);
                // Проверяем наличие атрибута #[VersionMethod('1')]
                if (!preg_match("/\[VersionMethod\('\d'\)\]/", $matches[1])) {
                    // Добавляем атрибут на строку выше

                    print_r('change, add attribute');
                    return "\n    #[VersionMethod('1')]\n" . $matches[3] . " " . $matches[4];
                }
                return $matches[0]; // Возвращаем без изменений, если атрибут уже есть
            },
            $newContent
        );

        // Записываем изменения обратно в файл, если были изменения
        if ($content !== $newContent) {
            file_put_contents($file, $newContent);
        }
    }
}

// Получаем путь к директории из аргументов командной строки
$options = getopt("", ["dir:"]);

if (!isset($options['dir'])) {
    echo "Укажите путь к директории с помощью --dir\n";
    exit(1);
}

$directory = $options['dir'];
$phpFiles = getPhpFiles($directory);
processFiles($phpFiles);