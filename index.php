<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_API_TEST),]
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_INDEX_TEMPLATE), null, $args);
