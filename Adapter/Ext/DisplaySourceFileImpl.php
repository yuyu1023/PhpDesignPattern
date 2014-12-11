<?php
namespace DoYouPhp\PhpDesignPattern\Adapter\Ext;

use DoYouPhp\PhpDesignPattern\Adapter\Ext\DisplaySourceFile;
use DoYouPhp\PhpDesignPattern\Adapter\Ext\ShowFile;


/**
 * DisplaySourceFileを実装したクラス
 */
class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
{
    /**
     * コンストラクタ
     */
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    /**
     * 指定されたソースファイルをハイライト表示する
     */
    public function display()
    {
        parent::showHighlight();
    }
}
