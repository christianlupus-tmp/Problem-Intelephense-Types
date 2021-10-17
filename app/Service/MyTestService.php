<?php

namespace OCA\Cookbook\Service;

use OCA\Cookbook\Helper\MyHelper;
use OCP\Files\IRootFolder;

class MyTestService {

    public function __construct(IRootFolder $root, MyHelper $helper)
    {
        $helper->foo();
        $root->getUserFolder();
    }

}
