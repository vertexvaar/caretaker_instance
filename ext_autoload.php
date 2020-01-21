<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2015-07-20 23:09

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('caretaker_instance');
$extensionClassesPath = $extensionPath . 'classes/';
return array(
    'tx_caretakerinstance_abstractcryptomanager' => $extensionClassesPath . 'class.tx_caretakerinstance_AbstractCryptoManager.php',
    'tx_caretakerinstance_backendusertestservice' => $extensionPath . 'services/class.tx_caretakerinstance_BackendUserTestService.php',
    'tx_caretakerinstance_base64cryptomanager' => $extensionClassesPath . 'class.tx_caretakerinstance_Base64CryptoManager.php',
    'tx_caretakerinstance_checkconfvarstestservice' => $extensionPath . 'services/class.tx_caretakerinstance_CheckConfVarsTestService.php',
    'tx_caretakerinstance_checkpathtestservice' => $extensionPath . 'services/class.tx_caretakerinstance_CheckPathTestService.php',
    'tx_caretakerinstance_commandrequest' => $extensionClassesPath . 'class.tx_caretakerinstance_CommandRequest.php',
    'tx_caretakerinstance_commandresult' => $extensionClassesPath . 'class.tx_caretakerinstance_CommandResult.php',
    'tx_caretakerinstance_commandresulttest' => $extensionPath . 'tests/class.tx_caretakerinstance_CommandResultTest.php',
    'tx_caretakerinstance_commandservice' => $extensionClassesPath . 'class.tx_caretakerinstance_CommandService.php',
    'tx_caretakerinstance_commandservicetest' => $extensionPath . 'tests/class.tx_caretakerinstance_CommandServiceTest.php',
    'tx_caretakerinstance_cryptomanagertest' => $extensionPath . 'tests/class.tx_caretakerinstance_CryptoManagerTest.php',
    'tx_caretakerinstance_diskspacetestservice' => $extensionPath . 'services/class.tx_caretakerinstance_DiskSpaceTestService.php',
    'tx_caretakerinstance_dummyoperation' => $extensionPath . 'tests/fixtures/class.tx_caretakerinstance_DummyOperation.php',
    'tx_caretakerinstance_extensiontestservice' => $extensionPath . 'services/class.tx_caretakerinstance_ExtensionTestService.php',
    'tx_caretakerinstance_extensiontestservicetest' => $extensionPath . 'tests/class.tx_caretakerinstance_ExtensionTestServiceTest.php',
    'tx_caretakerinstance_findextensionupdatestestservice' => $extensionPath . 'services/class.tx_caretakerinstance_FindExtensionUpdatesTestService.php',
    'tx_caretakerinstance_findinsecureextensiontestservice' => $extensionPath . 'services/class.tx_caretakerinstance_FindInsecureExtensionTestService.php',
    'tx_caretakerinstance_icryptomanager' => $extensionClassesPath . 'class.tx_caretakerinstance_ICryptoManager.php',
    'tx_caretakerinstance_ioperation' => $extensionClassesPath . 'class.tx_caretakerinstance_IOperation.php',
    'tx_caretakerinstance_ioperationmanager' => $extensionClassesPath . 'class.tx_caretakerinstance_IOperationManager.php',
    'tx_caretakerinstance_isecuritymanager' => $extensionClassesPath . 'class.tx_caretakerinstance_ISecurityManager.php',
    'tx_caretakerinstance_opensslcryptomanager' => $extensionClassesPath . 'class.tx_caretakerinstance_OpenSSLCryptoManager.php',
    'tx_caretakerinstance_operation_checkpathexists' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_CheckPathExists.php',
    'tx_caretakerinstance_operation_getdiskspace' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetDiskSpace.php',
    'tx_caretakerinstance_operation_getextensionlist' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetExtensionList.php',
    'tx_caretakerinstance_operation_getextensionversion' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetExtensionVersion.php',
    'tx_caretakerinstance_operation_getfilesystemchecksum' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetFilesystemChecksum.php',
    'tx_caretakerinstance_operation_getphpversion' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetPHPVersion.php',
    'tx_caretakerinstance_operation_getrecord' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetRecord.php',
    'tx_caretakerinstance_operation_gettypo3version' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_GetTYPO3Version.php',
    'tx_caretakerinstance_operation_matchpredefinedvariable' => $extensionClassesPath . 'class.tx_caretakerinstance_Operation_MatchPredefinedVariable.php',
    'tx_caretakerinstance_operationmanager' => $extensionClassesPath . 'class.tx_caretakerinstance_OperationManager.php',
    'tx_caretakerinstance_operationmanagertest' => $extensionPath . 'tests/class.tx_caretakerinstance_OperationManagerTest.php',
    'tx_caretakerinstance_operationresult' => $extensionClassesPath . 'class.tx_caretakerinstance_OperationResult.php',
    'tx_caretakerinstance_operationstest' => $extensionPath . 'tests/class.tx_caretakerinstance_OperationsTest.php',
    'tx_caretakerinstance_remotecommandconnector' => $extensionClassesPath . 'class.tx_caretakerinstance_RemoteCommandConnector.php',
    'tx_caretakerinstance_remotecommandconnectortest' => $extensionPath . 'tests/class.tx_caretakerinstance_RemoteCommandConnectorTest.php',
    'tx_caretakerinstance_remotetestservicebase' => $extensionPath . 'services/class.tx_caretakerinstance_RemoteTestServiceBase.php',
    'tx_caretakerinstance_remotetestservicetest' => $extensionPath . 'tests/class.tx_caretakerinstance_RemoteTestServiceBaseTest.php',
    'tx_caretakerinstance_remotetestservicetest_baseimpl' => $extensionPath . 'tests/class.tx_caretakerinstance_RemoteTestServiceBaseTest.php',
    'tx_caretakerinstance_requestsessiontimeoutexception' => $extensionClassesPath . 'exceptions/class.tx_caretakerinstance_RequestSessionTimeoutException.php',
    'tx_caretakerinstance_requestsessiontokenfailedexception' => $extensionClassesPath . 'exceptions/class.tx_caretakerinstance_RequestSessionTokenFailedException.php',
    'tx_caretakerinstance_securitymanager' => $extensionClassesPath . 'class.tx_caretakerinstance_SecurityManager.php',
    'tx_caretakerinstance_securitymanagertest' => $extensionPath . 'tests/class.tx_caretakerinstance_SecurityManagerTest.php',
    'tx_caretakerinstance_servicefactory' => $extensionClassesPath . 'class.tx_caretakerinstance_ServiceFactory.php',
    'tx_caretakerinstance_servicefactorytest' => $extensionPath . 'tests/class.tx_caretakerinstance_ServiceFactoryTest.php',
    'tx_caretakerinstance_servicehelper' => $extensionClassesPath . 'class.tx_caretakerinstance_ServiceHelper.php',
    'tx_caretakerinstance_servicestest' => $extensionPath . 'tests/class.tx_caretakerinstance_ServicesTest.php',
    'tx_caretakerinstance_typo3versiontestservice' => $extensionPath . 'services/class.tx_caretakerinstance_TYPO3VersionTestService.php',
    'tx_caretakerinstance_typo3versiontestservicetest' => $extensionPath . 'tests/class.tx_caretakerinstance_TYPO3VersionTestServiceTest.php',
    'tx_caretakerinstance_ReportsTestService' => $extensionPath . 'tests/class.tx_caretakerinstance_ReportsTestService.php'
);
