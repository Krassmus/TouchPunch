<?php

class TouchPunch extends StudIPPlugin implements SystemPlugin {

    public function __construct() {
        parent::__construct();
        PageLayout::addScript($this->getPluginURL()."/assets/jquery.ui.touch-punch.min.js");
    }
}