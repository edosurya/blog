<?php

namespace Pingpong\Menus\Presenters\Bootstrap;

use Pingpong\Menus\Presenters\Presenter;

class NavbarPresenter extends Presenter
{
    /**
     * {@inheritdoc }.
     */
    public function getOpenTagWrapper()
    {
        return PHP_EOL.'<ul>'.PHP_EOL;

        // return PHP_EOL.'<ul class="nav navbar-nav navbar-right">'.PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getCloseTagWrapper()
    {
        return PHP_EOL.'</ul>'.PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithoutDropdownWrapper($item)
    {
        return '<li'.$this->getActiveState($item).'><a href="'.$item->getUrl().'" '.$item->getAttributes().'> <span class="menu-icon"><i class="fa fa-list"></i></span> <span class="menu-text">'.$item->getIcon().' '.$item->title.'</span></a></li>'.PHP_EOL;

        // return '<li'.$this->getActiveState($item).'><a href="'.$item->getUrl().'" '.$item->getAttributes().'>'.$item->getIcon().' '.$item->title.'</a></li>'.PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getActiveState($item, $state = ' class="active"')
    {
        return $item->isActive() ? $state : null;
    }

    /**
     * Get active state on child items.
     *
     * @param $item
     * @param string $state
     *
     * @return null|string
     */
    public function getActiveStateOnChild($item, $state = 'active')
    {
        return $item->hasActiveOnChild() ? $state : null;
    }

    /**
     * {@inheritdoc }.
     */
    public function getDividerWrapper()
    {
        return '<li class="divider"></li>';
    }

    /**
     * {@inheritdoc }.
     */
    public function getHeaderWrapper($item)
    {
        return '<li class="dropdown-header">'.$item->title.'</li>';
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithDropDownWrapper($item)
    {
        return '<li><a  href="javascript:void(0);" data-action="click-trigger">
        <span class="menu-icon"><i class="icon-users"></i></span> 
        <span class="menu-text">'.$item->title.'</span>
        <span class="menu-badge">
        <span class="badge vd_bg-black-30">
        <i class="fa fa-angle-down"></i>
        </span></span>
        </a>
        <div class="child-menu"  data-action="click-target">
        <ul'.$this->getActiveState($item).'>'.$this->getChildMenuItems($item).'
        </ul>
        </div>
        </li>'
        .PHP_EOL;
    }

    /**
     * Get multilevel menu wrapper.
     *
     * @param \Pingpong\Menus\MenuItem $item
     *
     * @return string`
     */
    public function getMultiLevelDropdownWrapper($item)
    {
        return '<li class="dropdown'.$this->getActiveStateOnChild($item, ' active').'">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    '.$item->getIcon().' '.$item->title.'
                    <b class="caret pull-right caret-right"></b>
                  </a>
                  <ul class="dropdown-menu">
                    '.$this->getChildMenuItems($item).'
                  </ul>
                </li>'
        .PHP_EOL;
    }


    public function getCloseWithDropDownWrapper()
    {
        return PHP_EOL.'</ul>  
        </div>
        '.PHP_EOL;
    }
}