<?php
function private_webforms_docs($nid, $sid, $action = NULL) {


$webform = webform_menu_submission_load((int) $sid, (int) $nid);


$ch = curl_init();
if ($ch === FALSE) {
throw new Exception('failed to initialize');
}
$user = user_load($webform->uid);
curl_setopt($ch, CURLOPT_URL, 'http://8602016725.delfin.com.ru/api/document-create');

$post = [];

curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
'login' => 'web',
'password' => 'Jq5Url4zz',
'title' => 'Запрос на формирование документов в ЛК',
'contractor_id' => 0,
'contractor' => '',
'document_class' => 45,
'document_type' => 56,
'body' => 'Запрос документов из личного кабинета для юридических лиц. ИНН контрагента: '. $user->login .' . Тип документа: ' . $webform->data[1][0] . ' . Комментарий: ' . $webform->data[2][0] ,
'document_department' => 10,
'document_assigned_uid' => 15,
'date_of_completion' => strtotime('+3 days'),
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_exec($ch);
curl_close($ch);

}