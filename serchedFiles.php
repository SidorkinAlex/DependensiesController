<?php
$serched_arr=array (
  0 => 
  array (
    'parentClass' => 'BOT_AUDITORYController',
    'methods' => 
    array (
      0 => 'action_addCandidatesToAuditory',
      1 => 'action_getCandidatesFromAuditory',
      2 => 'action_DeleteRelationship',
      3 => 'action_getAuditoryCandidatesCount',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_AUDITORY/controller.php',
  ),
  1 => 
  array (
    'parentClass' => 'AbstractCustomACLDataMaker',
    'methods' => 
    array (
      0 => 'getCustomACLData',
      1 => 'setupTechData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/ACLRoles/custom/CustomACLDataMakers/HRPAC_CANDIDATESCustomACLDataMaker.php',
  ),
  2 => 
  array (
    'parentClass' => 'HRPAC_VACANCYCustomACLDataMaker',
    'methods' => 
    array (
      0 => 'getCustomACLData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/ACLRoles/custom/CustomACLDataMakers/CustomHRPAC_VACANCYCustomACLDataMaker.php',
  ),
  3 => 
  array (
    'parentClass' => 'ACLRoleFromHRPAC_CANDIDATES',
    'methods' => 
    array (
      0 => 'checkPermissionDeleteAudit',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/ACLRoles/custom/services/CustomACLRoleFromHRPAC_CANDIDATES.php',
  ),
  4 => 
  array (
    'parentClass' => 'ACLRoleFromCustomModule',
    'methods' => 
    array (
      0 => 'setBean',
      1 => 'checkCreatePermissions',
      2 => 'checkEditPermissions',
      3 => 'checkCreateTagImportPermissions',
      4 => 'getAllowedButtons',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/ACLRoles/custom/services/CustomACLRoleFromHRPAC_TAGS.php',
  ),
  5 => 
  array (
    'parentClass' => 'RolesService',
    'methods' => 
    array (
      0 => 'get_custom_tpl',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/ACLRoles/Entrypoint/services/CustomRolesService.php',
  ),
  6 => 
  array (
    'parentClass' => 'hhRespondHelper',
    'methods' => 
    array (
      0 => 'retrieve',
      1 => 'getBillingType',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATE_RESPONDS/RespondHelpers/CustomhhRespondHelper.php',
  ),
  7 => 
  array (
    'parentClass' => 'HRPAC_TAGSController',
    'methods' => 
    array (
      0 => 'action_permission_tag_create',
      1 => 'action_create_buttons',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_TAGS/controller.php',
  ),
  8 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_TAGS/views/view.edit.php',
  ),
  9 => 
  array (
    'parentClass' => 'HRPAC_EVENT',
    'methods' => 
    array (
      0 => 'retrieve',
      1 => 'getLastTZEventByUser',
      2 => 'convertLocalTimeToUTC',
      3 => 'convertUTCToLocalTime',
      4 => 'getUserTZ',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/CustomExtendedHRPAC_EVENT.php',
  ),
  10 => 
  array (
    'parentClass' => 'HRPAC_EVENTController',
    'methods' => 
    array (
      0 => 'action_dynamic_prefill',
      1 => 'action_EventSave',
      2 => 'action_getCandidateApproveEditView',
      3 => 'action_checkCandidateHasNumber',
      4 => 'action_get_rel_fields_values',
      5 => 'action_GetVacancyAssignedUsers',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/controller.php',
  ),
  11 => 
  array (
    'parentClass' => 'HRPAC_EVENTViewDetail',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'updateFieldValue',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/views/view.detail.php',
  ),
  12 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'getMetaDataFile',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/views/view.candidate_approve.php',
  ),
  13 => 
  array (
    'parentClass' => 'HRPAC_EVENTViewEdit',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'afterEVprocess',
      2 => 'customizeMetaData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/views/view.edit.php',
  ),
  14 => 
  array (
    'parentClass' => 'EventHelperFactory',
    'methods' => 
    array (
      0 => 'getHelper',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/classes/factories/CustomEventHelperFactory.php',
  ),
  15 => 
  array (
    'parentClass' => 'EventStrategy',
    'methods' => 
    array (
      0 => 'init',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/classes/helpers/CustomEventStrategy.php',
  ),
  16 => 
  array (
    'parentClass' => 'ExchangeEventHelper',
    'methods' => 
    array (
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/classes/helpers/CustomExchangeEventHelper.php',
  ),
  17 => 
  array (
    'parentClass' => 'GoogleEventHelper',
    'methods' => 
    array (
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/classes/helpers/CustomGoogleEventHelper.php',
  ),
  18 => 
  array (
    'parentClass' => 'TalentforceEventHelper',
    'methods' => 
    array (
      0 => 'sendTFNotification',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/classes/helpers/CustomTalentforceEventHelper.php',
  ),
  19 => 
  array (
    'parentClass' => 'TFNotification',
    'methods' => 
    array (
      0 => 'notifyEventUsers',
      1 => 'sendNotifications',
      2 => 'formEmailListForNotification',
      3 => 'formHTMLDataForNotificationByUserId',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/classes/CustomTFNotification.php',
  ),
  20 => 
  array (
    'parentClass' => 'DynamicRequestService',
    'methods' => 
    array (
      0 => 'isValid',
      1 => 'process',
      2 => 'retrieveBotScriptFromRequest',
      3 => 'prefillBotScriptDesc',
      4 => 'clearField',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_EVENT/DynamicRequest/HRPAC_EVENTBotScriptNameDynamicRequest.php',
  ),
  21 => 
  array (
    'parentClass' => 'HRPAC_SELECTION_STAGEController',
    'methods' => 
    array (
      0 => 'action_customCheckBeforeChangeStage',
      1 => 'action_checkBeforeChangeStage',
      2 => 'action_customCheckActionsBeforeChangeStage_ver2',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_SELECTION_STAGE/controller.php',
  ),
  22 => 
  array (
    'parentClass' => 'BOT_COMMUNICATIONController',
    'methods' => 
    array (
      0 => 'action_getCandidateCommunication',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_COMMUNICATION/controller.php',
  ),
  23 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATES',
    'methods' => 
    array (
      0 => 'getLevelChangeStrategy',
      1 => 'detachFromVacancy',
      2 => 'addResumeToVacancy',
      3 => 'linkResumeToChangeLevelVacancy',
      4 => 'create_list_count_query',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/CustomExtendedHRPAC_CANDIDATES.php',
  ),
  24 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATESController',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'action_getWaSendingEditView',
      2 => 'action_delete_audit',
      3 => 'action_checkErrorBeforeChangeLevel',
      4 => 'action_reconsider_candidate_popup',
      5 => 'action_reconsider_candidate',
      6 => 'action_customGetCandidateVacanciesSubpanelData',
      7 => 'action_resumeWarningIfHasLinkToVacancy',
      8 => 'action_getPopupOrAttachIntent',
      9 => 'action_addToVacancy',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/controller.php',
  ),
  25 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'customizeMetaData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/views/view.reconsider_candidate.php',
  ),
  26 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATESViewDetail',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'customizeMetaData',
      2 => 'updateFields',
      3 => 'updateCommunicationsField',
      4 => 'updateTagsField',
      5 => 'setupReconsiderCandidateAction',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/views/view.detail.php',
  ),
  27 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'getMetaDataFile',
      1 => 'customizeMetaData',
      2 => 'afterEVprocess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/views/view.wa_send.php',
  ),
  28 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATESViewList',
    'methods' => 
    array (
      0 => 'beforLVdisplay',
      1 => 'setupNondbFieldsParams',
      2 => 'customizeMetaData',
      3 => 'advansed_custom_search',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/views/view.list.php',
  ),
  29 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATESViewCandidates_List_In_Vacancy',
    'methods' => 
    array (
      0 => 'preDisplay',
      1 => 'getTargetVacancies',
      2 => 'getAllLevels',
      3 => 'advansed_custom_search',
      4 => 'prefillFilterValues',
      5 => 'execLogicForListInModuleVacancy',
      6 => 'setupNondbFieldsParams',
      7 => 'addFiledCurrentStageNameInTable',
      8 => 'customizeMetaData',
      9 => 'setupSwitcher',
      10 => 'setShowAllLevelsToIntents',
      11 => 'setupMassActions',
      12 => 'setupLinkIntent',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/views/view.candidates_list_in_vacancy.php',
  ),
  30 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATESViewList_Add_Candidates_To_Vacancy',
    'methods' => 
    array (
      0 => 'beforLVdisplay',
      1 => 'generateWhereCandidatesNotAttachedToVacancyBranch',
      2 => 'advansed_custom_search',
      3 => 'customizeMetaData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/views/view.list_add_candidates_to_vacancy.php',
  ),
  31 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATESAudit',
    'methods' => 
    array (
      0 => 'get_audit_list',
      1 => 'get_id_this_stage',
      2 => 'getListWithDisplayValue',
      3 => 'getDisplayValueTextForCustomEnumFields',
      4 => 'getDisplayValueTextForEnumFields',
      5 => 'getDisplayValueTextForCurrencyField',
      6 => 'getCurrencyValue',
      7 => 'getAfterValue',
      8 => 'getBeforeValue',
      9 => 'generateDefaultDisplayValue',
      10 => 'getFormattedRelatedData',
      11 => 'getDisplayRelatedValues',
      12 => 'addToVacancyMessage',
      13 => 'deleteFromVacancyMessage',
      14 => 'addReconsiderMessage',
      15 => 'getResumeMessageTail',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES/Audit/CustomHRPAC_CANDIDATESAudit.php',
  ),
  32 => 
  array (
    'parentClass' => 'HRPAC_SELECTION_STAGE_CANDIDATES_1Controller',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'action_get_confirmation_popup',
      2 => 'action_return_from_rejection',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_SELECTION_STAGE_CANDIDATES_1/controller.php',
  ),
  33 => 
  array (
    'parentClass' => 'HRPAC_SELECTION_STAGE_CANDIDATES_1ViewCustom_popup',
    'methods' => 
    array (
      0 => 'afterEVprocess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_SELECTION_STAGE_CANDIDATES_1/views/view.custom_popup.php',
  ),
  34 => 
  array (
    'parentClass' => 'HRPAC_SELECTION_STAGE_CANDIDATES_1',
    'methods' => 
    array (
      0 => 'reset_old_data_stage',
      1 => 'change_this_stage',
      2 => 'change_this_status',
      3 => 'getByCommentId',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_SELECTION_STAGE_CANDIDATES_1/CustomExtendedHRPAC_SELECTION_STAGE_CANDIDATES_1.php',
  ),
  35 => 
  array (
    'parentClass' => 'HRPAC_VACANCYController',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'getProvider',
      2 => 'action_getChildrenFlatListView',
      3 => 'action_get_detach_view',
      4 => 'action_get_move_view',
      5 => 'action_getListChangeCandidateLevel',
      6 => 'action_choose_selection_stage_popup',
      7 => 'action_changeLevelSelectionStage',
      8 => 'action_mass_status_change_popup',
      9 => 'action_mass_status_change',
      10 => 'action_save',
      11 => 'action_get_list_actions',
      12 => 'action_duplicateVacancyView',
      13 => 'action_getPopupMassAttachInform',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/controller.php',
  ),
  36 => 
  array (
    'parentClass' => 'CustomHRPAC_VACANCYViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'customisationFieldBeforeMetaDater',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.multivacancyedit.php',
  ),
  37 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'getMetaDataFile',
      1 => 'afterEVprocess',
      2 => 'setupRecordToSchema',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.multi_move.php',
  ),
  38 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewDetail',
    'methods' => 
    array (
      0 => 'getMetaData',
      1 => 'setupType',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.detail.php',
  ),
  39 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewList_Add_Vacancies_To_Candidate',
    'methods' => 
    array (
      0 => 'preDisplay',
      1 => 'customizeMetaData',
      2 => 'beforLVdisplay',
      3 => 'generateTitleForMassAddCandidates',
      4 => 'generateWhereWithStatusOpenAndCandidateNotAttach',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.list_add_vacancies_to_candidate.php',
  ),
  40 => 
  array (
    'parentClass' => 'CustomHRPAC_VACANCYViewEdit',
    'methods' => 
    array (
      0 => 'setFieldCustomizer',
      1 => 'customisationFieldBeforeMetaDater',
      2 => 'customizeMetaData',
      3 => 'setupCancelButton',
      4 => 'customizeAfterEvProcess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.duplicate.php',
  ),
  41 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'massDetachCustomization',
      2 => 'singleDetachCustomization',
      3 => 'setTitleAndDescription',
      4 => 'setupConfirmButtonIds',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.detach_popup.php',
  ),
  42 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewList',
    'methods' => 
    array (
      0 => 'beforLVdisplay',
      1 => 'getMetadata',
      2 => 'customizeMetaData',
      3 => 'addCustomListviewdefsAdditional',
      4 => 'addFilterByParent',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.children_list.php',
  ),
  43 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewList',
    'methods' => 
    array (
      0 => 'beforLVdisplay',
      1 => 'setupExtraWhere',
      2 => 'isArchivedFilterSwitcherEnabled',
      3 => 'customizeMetaData',
      4 => 'addMassChangeStatusPostAlert',
      5 => 'addMovePostAlert',
      6 => 'addDuplicatePostAlert',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.list.php',
  ),
  44 => 
  array (
    'parentClass' => 'CustomHRPAC_VACANCYViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'customisationFieldBeforeMetaDater',
      2 => 'customizeAfterEvProcess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.vacancyedit.php',
  ),
  45 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'setupHiddenFields',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.change_status.php',
  ),
  46 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'getMetaDataFile',
      1 => 'customizeMetaData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.popup_mass_attach_inform.php',
  ),
  47 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'setupSaveButton',
      2 => 'getMetaDataExtrapanelsFile',
      3 => 'setFieldCustomizer',
      4 => 'customisationFieldBeforeMetaDater',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.multi_merge.php',
  ),
  48 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewList_Add_Vacancies_To_Candidate',
    'methods' => 
    array (
      0 => 'preDisplay',
      1 => 'customizeMetaData',
      2 => 'setupTitle',
      3 => 'setupButtons',
      4 => 'beforLVdisplay',
      5 => 'retrieveOnlyNotArchivedVacanciesFromTree',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.list_change_candidate_level.php',
  ),
  49 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewEdit',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'customizeColums',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.edit.php',
  ),
  50 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'customizeMetaData',
      2 => 'setupSaveButtonIntents',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.choose_selection_stage.php',
  ),
  51 => 
  array (
    'parentClass' => 'HRPAC_VACANCYViewVacancy',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'customizeTitleButtons',
      2 => 'getActionsButtonIndex',
      3 => 'hideDetachButton',
      4 => 'setupCreateVacancyButton',
      5 => 'removeIcons',
      6 => 'removeActionsButton',
      7 => 'hidePickCandidateButton',
      8 => 'customizeMetaData',
      9 => 'addMovePostAlert',
      10 => 'addMassChangeStatusPostAlert',
      11 => 'addDuplicatePostAlert',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.vacancy.php',
  ),
  52 => 
  array (
    'parentClass' => 'TreeResponseBuilder',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'build',
      2 => 'buildNode',
      3 => 'setupAllowedToAttach',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/ListViewData/TreeResponseBuilder/ChangeLevelCandidateTreeBuilder.php',
  ),
  53 => 
  array (
    'parentClass' => 'TreeResponseBuilder',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'build',
      2 => 'buildNode',
      3 => 'disableIfNeeded',
      4 => 'setupAllowedToAttach',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/ListViewData/TreeResponseBuilder/AttachCandidateTreeBuilder.php',
  ),
  54 => 
  array (
    'parentClass' => 'AttachCandidateTreeBuilder',
    'methods' => 
    array (
      0 => 'setupAllowedToAttach',
      1 => 'disableIfNeeded',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/ListViewData/TreeResponseBuilder/MassAttachCandidateTreeBuilder.php',
  ),
  55 => 
  array (
    'parentClass' => 'AbstractCustomizer',
    'methods' => 
    array (
      0 => 'setView',
      1 => 'customizeField',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/Strategy/MultivacancyFieldCustomizer.php',
  ),
  56 => 
  array (
    'parentClass' => 'AbstractCustomizer',
    'methods' => 
    array (
      0 => 'setView',
      1 => 'customizeField',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/Strategy/VacancyFieldCustomizer.php',
  ),
  57 => 
  array (
    'parentClass' => 'AbstractCustomizer',
    'methods' => 
    array (
      0 => 'setView',
      1 => 'customizeField',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/Strategy/RequestFieldCustomizer.php',
  ),
  58 => 
  array (
    'parentClass' => 'CustomHRPAC_VACANCYViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'customisationFieldBeforeMetaDater',
      2 => 'customizeAfterEvProcess',
      3 => 'prefillNameId',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/views/view.requestedit.php',
  ),
  59 => 
  array (
    'parentClass' => 'HRPAC_VACANCY_after_relationship_add',
    'methods' => 
    array (
      0 => 'add_rel_candidater_stage',
      1 => 'add_rel_resume_id_stage',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/CustomHook_after_relationship_add.php',
  ),
  60 => 
  array (
    'parentClass' => 'HRPAC_VACANCY_after_relationship_delete',
    'methods' => 
    array (
      0 => 'delete_rel_candidater_stage',
      1 => 'updateCandidateStatusIfNotInVacancy',
      2 => 'getResumeId',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/CustomHook_after_relationship_delete.php',
  ),
  61 => 
  array (
    'parentClass' => 'HRPAC_VACANCYAudit',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'processRow',
      2 => 'processStatusMessage',
      3 => 'processCandidateMessage',
      4 => 'setCreateRecord',
      5 => 'setRelationshipDeleteRecord',
      6 => 'deleteDocumentMessage',
      7 => 'deleteCommentMessage',
      8 => 'deleteVacancyMessage',
      9 => 'setRelationshipAddRecord',
      10 => 'addDocumentMessage',
      11 => 'addCommentMessage',
      12 => 'addVacancyMessage',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Audit/CustomHRPAC_VACANCYAudit.php',
  ),
  62 => 
  array (
    'parentClass' => 'VacancyEditViewLogic',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'execute',
      2 => 'prefillBeanFromParent',
      3 => 'prefillVacancyFromMultivacancy',
      4 => 'prefillRequestFromVacancy',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/CustomVacancyEditViewLogic.php',
  ),
  63 => 
  array (
    'parentClass' => 'AbstractVacancyViewLogic',
    'methods' => 
    array (
      0 => 'execute',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/CustomVacancyDetailViewLogic.php',
  ),
  64 => 
  array (
    'parentClass' => 'AbstractVacancyViewLogic',
    'methods' => 
    array (
      0 => 'execute',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/CustomVacancyMassStatusChangePopupViewLogic.php',
  ),
  65 => 
  array (
    'parentClass' => 'ButtonsSelectionStageLogic',
    'methods' => 
    array (
      0 => 'checkOnBlockStage',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/CustomButtonsSelectionStageLogic.php',
  ),
  66 => 
  array (
    'parentClass' => 'AbstractVacancyViewLogic',
    'methods' => 
    array (
      0 => 'execute',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/CustomVacancyChildrenFlatListViewLogic.php',
  ),
  67 => 
  array (
    'parentClass' => 'AbstractVacancyViewLogic',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'execute',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/CustomVacancyMultiMergeViewLogic.php',
  ),
  68 => 
  array (
    'parentClass' => 'status_idCustomLogic',
    'methods' => 
    array (
      0 => 'getTableOptions',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/Logic/Customstatus_idCustomLogic.php',
  ),
  69 => 
  array (
    'parentClass' => 'MassAddCandidates',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'validateCandidates',
      2 => 'validateCandidateHasResume',
      3 => 'validateMultivacancyRules',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/Classes/CustomMassAddCandidates.php',
  ),
  70 => 
  array (
    'parentClass' => 'HRPAC_VACANCY',
    'methods' => 
    array (
      0 => 'getRoot',
      1 => 'getTreeView',
      2 => 'getRootId',
      3 => 'getType',
      4 => 'getTypeFieldName',
      5 => 'getTypeList',
      6 => 'getMergeStrategy',
      7 => 'getFieldSyncStrategy',
      8 => 'inFieldSyncProcess',
      9 => 'getDuplicateStrategy',
      10 => 'getMoveStrategy',
      11 => 'getAdditionalAssignedIds',
      12 => 'getAdditionalManagerIds',
      13 => 'getAdditionalLevelManagerIds',
      14 => 'getActualRelatedIds',
      15 => 'dropRellinkCache',
      16 => 'addRelatedLinks',
      17 => 'save',
      18 => 'is_status_blocked_for_change',
      19 => 'getStatusClosed',
      20 => 'getDetachStrategy',
      21 => 'getAllowedStatuses',
      22 => 'massChangeStatus',
      23 => 'getSubdivisionOfVacancies',
      24 => 'getOpenedRootVacancyIds',
      25 => 'Add_candidates',
      26 => 'addCandidates',
      27 => 'getVacancyIdsOfBranchWithParents',
      28 => 'checkVacancyDataBeforeAddCandidate',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/CustomExtendedHRPAC_VACANCY.php',
  ),
  71 => 
  array (
    'parentClass' => 'TreeResponseBuilder',
    'methods' => 
    array (
      0 => 'getAllowedTypes',
      1 => 'build',
      2 => 'modifyNodes',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/MultiVacancy/OptionProvider/Provider/MoveList/Strategy/VacancyMoveStrategy.php',
  ),
  72 => 
  array (
    'parentClass' => 'TreeResponseBuilder',
    'methods' => 
    array (
      0 => 'getAllowedTypes',
      1 => 'build',
      2 => 'modifyNodes',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_VACANCY/MultiVacancy/OptionProvider/Provider/MoveList/Strategy/RequestMoveStrategy.php',
  ),
  73 => 
  array (
    'parentClass' => 'EmailTemplate',
    'methods' => 
    array (
      0 => 'getAvailableModuleList',
      1 => 'enableBodyEditor',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/EmailTemplates/CustomExtendedEmailTemplate.php',
  ),
  74 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATES_RESUMEController',
    'methods' => 
    array (
      0 => 'action_getPopupOptionResumeToReview',
      1 => 'action_get_rel_fields_values',
      2 => 'get_with_sub_text',
      3 => 'action_getCandidatesResumeDetailSubpanelData',
      4 => 'getCurrentResume',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES_RESUME/controller.php',
  ),
  75 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
      1 => 'getMetaDataFile',
      2 => 'customizeMetaData',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES_RESUME/views/view.option_resume_to_review.php',
  ),
  76 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATES_RESUMEViewResumeDetail',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'afterDVprocess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES_RESUME/views/view.resumedetail.php',
  ),
  77 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATES_RESUMEViewResumeEdit',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'afterEVprocess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES_RESUME/views/view.resumeedit.php',
  ),
  78 => 
  array (
    'parentClass' => 'HRPAC_CANDIDATES_RESUME',
    'methods' => 
    array (
      0 => 'save',
      1 => 'update_candidate_from_resume',
      2 => 'get_id_candidates_latest_resume',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES_RESUME/CustomExtendedHRPAC_CANDIDATES_RESUME.php',
  ),
  79 => 
  array (
    'parentClass' => 'LazyOptionsFuctionsRegistry',
    'methods' => 
    array (
      0 => 'get_oshs_options_for_hrpac_subdivision_name',
      1 => 'get_vacancy_move_to',
      2 => 'getOptions',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_MANNING_TABLE/CustomLazyOptionsFuctionsRegistry.php',
  ),
  80 => 
  array (
    'parentClass' => 'ViewList',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'ProjectViewList',
      2 => 'preDisplay',
      3 => 'Display',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Project/views/view.list.php',
  ),
  81 => 
  array (
    'parentClass' => 'ImportFiles',
    'methods' => 
    array (
      0 => 'createRecognitionResume',
      1 => 'createCandidate',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CUSTOM_IMPORT/classes/CustomImportFiles.php',
  ),
  82 => 
  array (
    'parentClass' => 'CandidatesStrategy',
    'methods' => 
    array (
      0 => 'getXlsxMap',
      1 => 'prepareBeans',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CUSTOM_IMPORT/classes/CustomCandidatesStrategy.php',
  ),
  83 => 
  array (
    'parentClass' => 'UsersViewMenu',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'customizeMetaData',
      2 => 'addUserLimitWarning',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Users/views/view.menu.php',
  ),
  84 => 
  array (
    'parentClass' => 'User',
    'methods' => 
    array (
      0 => 'userDefaultFilters',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Users/CustomExtendedUser.php',
  ),
  85 => 
  array (
    'parentClass' => 'SkbLogger',
    'methods' => 
    array (
      0 => 'removeSensetiveInfo',
      1 => 'isLogsEnabled',
      2 => 'getLogLevel',
      3 => 'getKeepLogDays',
      4 => 'getLogDir',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Users/OIDC/Util/Logger.php',
  ),
  86 => 
  array (
    'parentClass' => 'SugarAuthenticate',
    'methods' => 
    array (
      0 => 'loginAuthenticate',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Users/authentication/OIDCAuthenticate/OIDCAuthenticate.php',
  ),
  87 => 
  array (
    'parentClass' => 'SugarAuthenticateUser',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'authenticateUser',
      2 => 'loadUserOnLogin',
      3 => 'isUserFactorAuthenticated',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Users/authentication/OIDCAuthenticate/OIDCAuthenticateUser.php',
  ),
  88 => 
  array (
    'parentClass' => 'SugarAuthenticate',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'logout',
      2 => 'deleteSessionFromStorage',
      3 => 'signOutKontur',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/Users/authentication/CustomSugarAuthenticate/CustomSugarAuthenticate.php',
  ),
  89 => 
  array (
    'parentClass' => 'HRPAC_COMMENTSController',
    'methods' => 
    array (
      0 => 'action_getCreateCommentPopupStages',
      1 => 'action_getEditCommentPopupStages',
      2 => 'action_saveCommentPopupStages',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_COMMENTS/controller.php',
  ),
  90 => 
  array (
    'parentClass' => 'CustomViewEdit',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'setupPopupTitle',
      2 => 'setupSaveButtonIntents',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_COMMENTS/views/view.stagescommentpopup.php',
  ),
  91 => 
  array (
    'parentClass' => 'MergeDuplicatesLogic',
    'methods' => 
    array (
      0 => 'mergeVacancies',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_CANDIDATES_DUPLICATES/Classes/Logic/Merge/CustomMergeDuplicatesLogic.php',
  ),
  92 => 
  array (
    'parentClass' => 'HRPAC_REMINDERViewDetail',
    'methods' => 
    array (
      0 => 'customizeMetaData',
      1 => 'customizePanel',
      2 => 'customizeRows',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_REMINDER/views/view.detail.php',
  ),
  93 => 
  array (
    'parentClass' => 'HRPAC_REMINDERViewEdit',
    'methods' => 
    array (
      0 => 'afterEVprocess',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_REMINDER/views/view.edit.php',
  ),
  94 => 
  array (
    'parentClass' => 'HRPAC_REMINDER',
    'methods' => 
    array (
      0 => 'save',
      1 => 'convertLocalTimeToUTC',
      2 => 'convertUTCToLocalTime',
      3 => 'getUserTZ',
      4 => 'getUTCFromByTimeZoneDateTime',
      5 => 'custom_send_notifications',
      6 => 'setWasNotified',
      7 => 'getLastTZReminderByUser',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_REMINDER/CustomExtendedHRPAC_REMINDER.php',
  ),
  95 => 
  array (
    'parentClass' => 'BOT_SCRIPTController',
    'methods' => 
    array (
      0 => 'action_mark_is_old',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_SCRIPT/controller.php',
  ),
  96 => 
  array (
    'parentClass' => 'BOT_SCRIPTViewEdit',
    'methods' => 
    array (
      0 => 'preDisplay',
      1 => 'display',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_SCRIPT/views/view.edit.php',
  ),
  97 => 
  array (
    'parentClass' => 'BOT_SCRIPT',
    'methods' => 
    array (
      0 => 'set_mark_is_old',
      1 => 'getBotScriptNames',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_SCRIPT/CustomExtendedBOT_SCRIPT.php',
  ),
  98 => 
  array (
    'parentClass' => 'HRPAC_PUBLISHED_VACANCYController',
    'methods' => 
    array (
      0 => 'action_checkPermission',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_PUBLISHED_VACANCY/controller.php',
  ),
  99 => 
  array (
    'parentClass' => 'HRPAC_PUBLISHED_VACANCY',
    'methods' => 
    array (
      0 => 'changeStatus',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_PUBLISHED_VACANCY/CustomExtendedHRPAC_PUBLISHED_VACANCY.php',
  ),
  100 => 
  array (
    'parentClass' => 'BOT_MAILINGSController',
    'methods' => 
    array (
      0 => 'action_mailingsSave',
      1 => 'action_redirectToCandidateChat',
      2 => 'action_takeCountCandidatesInMailings',
      3 => 'action_takeCandidatesFromMailings',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_MAILINGS/controller.php',
  ),
  101 => 
  array (
    'parentClass' => 'BOT_MAILINGSViewEdit',
    'methods' => 
    array (
      0 => 'preDisplay',
      1 => 'afterEVprocess',
      2 => 'formatVacancyNames',
      3 => 'setupEditView',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_MAILINGS/views/view.edit.php',
  ),
  102 => 
  array (
    'parentClass' => 'BOT_MAILINGS',
    'methods' => 
    array (
      0 => 'retrieve',
      1 => 'recalculate_receivers_count',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/BOT_MAILINGS/CustomExtendedBOT_MAILINGS.php',
  ),
  103 => 
  array (
    'parentClass' => 'CustomViewList',
    'methods' => 
    array (
      0 => 'Display',
      1 => 'preDisplay',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/modules/HRPAC_SUBDIVISION/views/view.list.php',
  ),
  104 => 
  array (
    'parentClass' => 'GetVacancyListOptions',
    'methods' => 
    array (
      0 => 'getVacancyList',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/plugin/actions/helperActions/CustomGetVacancyListOptions.php',
  ),
  105 => 
  array (
    'parentClass' => 'SkbException',
    'methods' => 
    array (
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/Exceptions/VacancyChangeStatusException.php',
  ),
  106 => 
  array (
    'parentClass' => 'Exception',
    'methods' => 
    array (
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/Exceptions/SkbException.php',
  ),
  107 => 
  array (
    'parentClass' => 'SaveRole',
    'methods' => 
    array (
      0 => 'beforeSaveRoleConfig',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Actions/CustomSaveRole.php',
  ),
  108 => 
  array (
    'parentClass' => 'CheckLicenses',
    'methods' => 
    array (
      0 => 'getAvailableUserCount',
      1 => 'getNonFixedRoleUsers',
      2 => 'getLicenseFromEnv',
      3 => 'updateLicenseInEnv',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Actions/CustomCheckLicenses.php',
  ),
  109 => 
  array (
    'parentClass' => 'Custom_podbor_vacansy_candidates',
    'methods' => 
    array (
      0 => 'save_history',
      1 => 'getLastAuditId',
      2 => 'saveAudit',
      3 => 'check_error_berfore_change_stage',
      4 => 'getVacancyData',
      5 => 'createSelectionStageCandidates',
      6 => 'deleteSelectionStageCandidates',
      7 => 'createSelectionStageForCandidateOnVacancy',
      8 => 'changeStage',
      9 => 'change_this_stage_for_candidates',
      10 => 'get_stages_candidate_vacancy',
      11 => 'setupRequiredStageCommentCheck',
      12 => 'addRequiredStageCommentCheck',
      13 => 'addRelateCandidateStageUsingBean',
      14 => 'massAddRelateCandidateStageUsingSQL',
      15 => 'updateSelectionStageFields',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Actions/CustomCustom_podbor_vacansy_candidates.php',
  ),
  110 => 
  array (
    'parentClass' => 'PanelStagesCandidats',
    'methods' => 
    array (
      0 => 'getStagesFromVacansy',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Tasks/CustomPanelStagesCandidats.php',
  ),
  111 => 
  array (
    'parentClass' => 'MetaAdapterRightPanel',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'getListStages',
      2 => 'setup',
      3 => 'setupBreadCrumbsMetadata',
      4 => 'setupLinkToVacancyMetadata',
      5 => 'getSchemaForVacancyListField',
      6 => 'getSubdivisionField',
      7 => 'getProjectField',
      8 => 'createSchemaField',
      9 => 'customizeStageMetadata',
      10 => 'setupConfirmaitionPopupIntent',
      11 => 'setupCommentIcons',
      12 => 'getPreparedMetaData',
      13 => 'setupIntents',
      14 => 'getStagesFromVacancy',
      15 => 'setParams',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Tasks/v3/CustomMetaAdapterRightPanel.php',
  ),
  112 => 
  array (
    'parentClass' => 'CheckActions',
    'methods' => 
    array (
      0 => 'check_comment_on_previous_stage',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/CustomCheckActions.php',
  ),
  113 => 
  array (
    'parentClass' => 'VacancyListDataHelper',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'getCandidateVacanciesSubpanelData',
      2 => 'convertDataToListRow',
      3 => 'buildTitle',
      4 => 'setupRecruiters',
      5 => 'setupSubdivisions',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/CustomVacancyListDataHelper.php',
  ),
  114 => 
  array (
    'parentClass' => 'EmailTemplatesVariablesHelper',
    'methods' => 
    array (
      0 => 'formatVariable',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/CustomEmailTemplatesVariablesHelper.php',
  ),
  115 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run',
      3 => 'getTotalRequests',
      4 => 'getRequestsByOffest',
      5 => 'setupSubdivision',
      6 => 'setupFunctionalStructures',
      7 => 'setupProjects',
      8 => 'setupLevels',
      9 => 'setupStageTemplate',
      10 => 'updateVacancyNumbers',
      11 => 'updateParents',
      12 => 'insertRellinks',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportRequests.php',
  ),
  116 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run_candidates',
      3 => 'fetchCandidateDocumentsBatch',
      4 => 'fetchCandidatesHf',
      5 => 'run_vacancies',
      6 => 'fetchVacancyDocumentsBatch',
      7 => 'fetchVacanciesHf',
      8 => 'buildFilePath',
      9 => 'getProgress',
      10 => 'getCurrentProgressData',
      11 => 'updateOffsetProgress',
      12 => 'shouldStopProcessing',
      13 => 'processDocument',
      14 => 'addDocumentBatchData',
      15 => 'executeBatchInsert',
      16 => 'finalizeBatchInsert',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowCandidateVacancyDocuments.php',
  ),
  117 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'processFiles',
      3 => 'processCandidates',
      4 => 'getTotalDocRevisions',
      5 => 'fetchFilesFromDB',
      6 => 'getTotalCandidatePhotoFiles',
      7 => 'fetchCandidatesFromDB',
      8 => 'transferFileToS3',
      9 => 'initializeDirectories',
      10 => 'getProgress',
      11 => 'updateOffsetProgress',
      12 => 'getCurrentProgressData',
      13 => 'shouldStopProcessing',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowSendFilesToS3.php',
  ),
  118 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run',
      3 => 'getTotalVacancies',
      4 => 'getVacanciesByOffest',
      5 => 'setupVacancyType',
      6 => 'setupCreator',
      7 => 'setupRecruiter',
      8 => 'setupAdditionalManagers',
      9 => 'setupSkbAdditionalLevelManagers',
      10 => 'setupSubdivision',
      11 => 'setupProjects',
      12 => 'setupStageTemplate',
      13 => 'setupStatus',
      14 => 'setupCategory',
      15 => 'setupContactPerson',
      16 => 'setupLocation',
      17 => 'setupVacancyNames',
      18 => 'insertRellinks',
      19 => 'updateVacancyNumbers',
      20 => 'updateParents',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportVacancies.php',
  ),
  119 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/FinalWorkers/WorkerHuntFlowDropTempTables.php',
  ),
  120 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/FinalWorkers/WorkerHuntFlowDropTempMapperTables.php',
  ),
  121 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'runLinkedCandidateToVacancyAudit',
      3 => 'runSelectionStageAudit',
      4 => 'runLinkDocumentStageAudit',
      5 => 'saveAuditData',
      6 => 'getUsers',
      7 => 'getStages',
      8 => 'getCandidates',
      9 => 'getVacancies',
      10 => 'getTotalSelectionAudit',
      11 => 'getAuditStages',
      12 => 'getTotalDocumentStageAudit',
      13 => 'getDocumentStageAudit',
      14 => 'getProgress',
      15 => 'getCurrentProgressData',
      16 => 'updateOffsetProgress',
      17 => 'shouldStopProcessing',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportHistory.php',
  ),
  122 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'importTemporaryTables',
      3 => 'createTempTable',
      4 => 'createIndex',
      5 => 'processFiles',
      6 => 'processFileCompletely',
      7 => 'findMatchingFiles',
      8 => 'getCompletedFiles',
      9 => 'getStartPosition',
      10 => 'insertDataInBatches',
      11 => 'getBatch',
      12 => 'getBatchHuntflow',
      13 => 'getBatchSelectionApplicationId',
      14 => 'insertBatch',
      15 => 'prepareColumns',
      16 => 'prepareValues',
      17 => 'prepareValue',
      18 => 'formatDate',
      19 => 'saveProgress',
      20 => 'markFileAsCompleted',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/DependentWorkers/WorkerHuntFlowImportTempTables.php',
  ),
  123 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/DependentWorkers/WorkerHuntFlowImportTempMapperTables.php',
  ),
  124 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'checkDirectoriesAndFilesAndJsonAndXlsxValidate',
      3 => 'checkAllFilesExist',
      4 => 'validateXlsxFile',
      5 => 'validateDirectory',
      6 => 'validateFiles',
      7 => 'getFilesByNamePattern',
      8 => 'validateJsonFile',
      9 => 'getCompletedFiles',
      10 => 'markFileAsCompleted',
      11 => 'checkDocumentDirectory',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/DependentWorkers/WorkerHuntFlowValidateData.php',
  ),
  125 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run',
      3 => 'getTotalCandidates',
      4 => 'getCandidatesByOffset',
      5 => 'getRelations',
      6 => 'setupStageRelations',
      7 => 'extractUnionIdsFromRelations',
      8 => 'intersectStagesWithTemplates',
      9 => 'setupRequestsRelations',
      10 => 'linkWithClosedRequest',
      11 => 'changeThis',
      12 => 'stepBackThisStage',
      13 => 'createNewRequest',
      14 => 'getThisStage',
      15 => 'insertRelations',
      16 => 'setupNewRequests',
      17 => 'insertNewRequests',
      18 => 'updateVacancyNumbers',
      19 => 'updateParents',
      20 => 'updateRequestStatus',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportRelations.php',
  ),
  126 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run',
      3 => 'getProgressOffset',
      4 => 'updateOffsetProgress',
      5 => 'shouldStopProcessing',
      6 => 'getTotalCandidates',
      7 => 'getCandidatesWhereSql',
      8 => 'getSqlTransaction',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportCandidates.php',
  ),
  127 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run',
      3 => 'getTotalCandidates',
      4 => 'getCandidatesByOffset',
      5 => 'setupCommunications',
      6 => 'addCommunicationsFromDoubles',
      7 => 'insertResumes',
      8 => 'insertCommunications',
      9 => 'buildSqlsForComunicationInsert',
      10 => 'setupCandidatesComments',
      11 => 'setupCommentsFromDoubles',
      12 => 'setupStageComments',
      13 => 'setupStageCommentsFromDoubles',
      14 => 'setupRejectionComments',
      15 => 'buildRejectionComment',
      16 => 'setupRejectionCommentsFromDoubles',
      17 => 'insertCommentsToTempTable',
      18 => 'setupResumes',
      19 => 'getResumes',
      20 => 'setupCandidateStatus',
      21 => 'mapTagsToStatus',
      22 => 'setupFieldsFromApplicantQuestionaryValue',
      23 => 'insertResponds',
      24 => 'insertDocuments',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportCandidatesExtraData.php',
  ),
  128 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'run',
      3 => 'prepareDataForSend',
      4 => 'sendToService',
      5 => 'getProgressOffset',
      6 => 'updateOffsetProgress',
      7 => 'shouldStopProcessing',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowSendCommentsToService.php',
  ),
  129 => 
  array (
    'parentClass' => 'abstractIWorker',
    'methods' => 
    array (
      0 => '__construct',
      1 => 'start',
      2 => 'migrateDataFromConfig',
      3 => 'migrateDataFromTempTableWithOffset',
      4 => 'updateIdsAndParentIds',
      5 => 'getProgressOffset',
      6 => 'updateOffsetProgress',
      7 => 'prepareDataForInsert',
      8 => 'importNCIDictionaries',
      9 => 'importFromExcel',
      10 => 'processSheet',
      11 => 'mapRowData',
      12 => 'extractRowData',
      13 => 'letterToColumnIndex',
      14 => 'insertBatchWithDuplicateCheck',
      15 => 'isDuplicateBatch',
      16 => 'removeInternalDuplicates',
      17 => 'insertBatch',
      18 => 'shouldStopProcessing',
      19 => 'updateProgress',
      20 => 'updateCompletedSection',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/custom/include/DDD/Helpers/HuntFlowImport/Workers/WorkerHuntFlowImportNCIDictionary.php',
  ),
  136 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_CATEGORIES/SKB_CATEGORIES.php',
  ),
  137 => 
  array (
    'parentClass' => 'CustomSugarController',
    'methods' => 
    array (
      0 => 'action_getMessageTemplate',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/KONTUR_MESSAGE_TEMPLATE/controller.php',
  ),
  138 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
      1 => 'loadWhatsAppTemplates',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/KONTUR_MESSAGE_TEMPLATE/KONTUR_MESSAGE_TEMPLATE.php',
  ),
  139 => 
  array (
    'parentClass' => 'ViewList',
    'methods' => 
    array (
      0 => 'Display',
      1 => 'preDisplay',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_FUNCTIONAL_STRUCTURE/views/view.list.php',
  ),
  140 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_FUNCTIONAL_STRUCTURE/SKB_FUNCTIONAL_STRUCTURE.php',
  ),
  141 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_SPECIALIZATION/SKB_SPECIALIZATION.php',
  ),
  142 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
      1 => 'loadWhatsAppConfigs',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/KONTUR_SCENARIO_CONFIG/KONTUR_SCENARIO_CONFIG.php',
  ),
  143 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
      1 => '__construct',
      2 => 'getHierarchyOrder',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_BRANDIATIE/SKB_BRANDIATIE.php',
  ),
  144 => 
  array (
    'parentClass' => 'CustomSugarController',
    'methods' => 
    array (
      0 => 'getProvider',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_BRANDIATIE/controller.php',
  ),
  145 => 
  array (
    'parentClass' => 'DashletGeneric',
    'methods' => 
    array (
      0 => '__construct',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_BRANDIATIE/Dashlets/SKB_BRANDIATIEDashlet/SKB_BRANDIATIEDashlet.php',
  ),
  146 => 
  array (
    'parentClass' => 'Basic',
    'methods' => 
    array (
      0 => 'bean_implements',
    ),
    'childClassFile' => '/home/alexsid/dev/php/TF/skb-kontur/modules/SKB_CANDIDATE_LEVELS/SKB_CANDIDATE_LEVELS.php',
  ),
);