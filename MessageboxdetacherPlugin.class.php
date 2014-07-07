<?php
/**
 * MessageboxdetacherPlugin.class.php
 *
 * ...
 *
 * @author  Florian Bieringer <florian.bieringer@uni-passau.de>
 * @version 1.0
 */
class MessageboxdetacherPlugin extends StudIPPlugin implements SystemPlugin {

    public function __construct() {
        parent::__construct();
        PageLayout::addScript($this->getPluginURL().'/assets/application.js');
        PageLayout::addStylesheet($this->getPluginURL().'/assets/style.css');
    }

    public function initialize () {

    }

    public function show_action () {
    }
}
