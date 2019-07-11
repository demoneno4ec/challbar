<?php
namespace pageSetting;

require_once $_SERVER['DOCUMENT_ROOT'].'include/prolog_before.php';


class PageSetting
{
    private $title = '$sTitle';

    public function getTitle(){
        ob_start();
        $sTitle = $this->title;
        return $sTitle;
    }
    public function setTitle($title){

        $title = strip_tags($title);
        $this->title = $title;
        $out = ob_get_clean();

        echo str_replace('$sTitle', $this->title, $out);

    }
    public function getFileSize($filePath){
        $responce = 'file not found';
        if (file_exists($filePath)){
            $responce = number_format(filesize($filePath) / 1048576, 2) . 'Mb';
        }
        return $responce;
    }
}

?>