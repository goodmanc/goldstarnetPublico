<?php

Yii::import('zii.widgets.CMenu');

class MyMenu extends CMenu {

    public $activateItemsOuter = true;
    public $iconDefault = null;

    //need to include this for our function to run
    public function run() {
        $this->renderMenu($this->items);
    }

    /**
     * Recursively renders the menu items.
     * @param array $items the menu items to be rendered recursively
     */
    protected function renderMenuRecursive($items) {
        $count = 0;
        $n = count($items);
        foreach ($items as $item) {
            $count++;
            $options = isset($item['itemOptions']) ? $item['itemOptions'] : array();
            $class = array();
            if ($item['active'] && $this->activeCssClass != '') {
                if ($this->activateItemsOuter) {
                    $class [] = $this->activeCssClass;
//                    $options["class"] .= $this->activeCssClass;
                } else {
                    if (isset($item['linkOptions'])) {
                        $item['linkOptions'] = array('class' => $item['linkOptions']['class'] . ' ' . $this->activeCssClass);
                    } else {
                        $item['linkOptions'] = array('class' => $this->activeCssClass);
                    }
                }
            }
            if ($count === 1 && $this->firstItemCssClass !== null)
                $class[] = $this->firstItemCssClass;
            if ($count === $n && $this->lastItemCssClass !== null)
                $class[] = $this->lastItemCssClass;
            if ($this->itemCssClass !== null)
                $class[] = $this->itemCssClass;
            if ($class !== array()) {
                if (empty($options['class']))
                    $options['class'] = implode(' ', $class);
                else
                    $options['class'].=' ' . implode(' ', $class);
            }

            echo CHtml::openTag('li', isset ($item['itemOptions']) ? $item['itemOptions'] :$options);
            $icon = "";
            if (isset ($item['url'])) {
                $label = '{icon}'.($this->linkLabelWrapper === null ? $item['label'] : '<' . $this->linkLabelWrapper . ' class="nav-label">' . $item['label'] . '</' . $this->linkLabelWrapper . '>');
                $menu = CHtml :: link($label, $item['url'], isset ($item['linkOptions']) ? $item['linkOptions'] : array());
            }
            else
                $menu = CHtml :: tag('span', isset ($item['linkOptions']) ? $item['linkOptions'] : array(), $item['label']);
            if (isset ($this->itemTemplate) || isset ($item['template'])) {
                $icon = isset ($item['icon']) ? $item['icon'] : $this->iconDefault;
                $template = isset ($item['template']) ? $item['template'] : $this->itemTemplate;
                echo strtr(strtr($template, array('{menu}' => $menu)), array('{icon}' => $icon));
            }
            else
                echo strtr(strtr($menu, array('{menu}' => $menu)), array('{icon}' => $icon));
            if (isset ($item['items']) && count($item['items'])) {
                echo "\n" . CHtml :: openTag('ul', isset($item['submenuHtmlOptions']) ? $item['submenuHtmlOptions'] : $this->submenuHtmlOptions) . "\n";
                $this->renderMenuRecursive($item['items']);
                echo CHtml :: closeTag('ul') . "\n";
            }
            echo CHtml :: closeTag('li') . "\n";
        }
    }

    /**
     * Renders the content of a menu item.
     * Note that the container and the sub-menus are not rendered here.
     * @param array $item the menu item to be rendered. Please see {@link items} on what data might be in the item.
     * @return string
     * @since 1.1.6
     */
    protected function renderMenuItem2($item) {

        if (isset($item['url'])) {
            $label = $this->linkLabelWrapper === null ? $item['label'] : '<' . $this->linkLabelWrapper . '>' . $item['label'] . '</' . $this->linkLabelWrapper . '>';
            $menu = CHtml :: link($label, $item['url'], isset($item['linkOptions']) ? $item['linkOptions'] : array());
        } else
            $menu = CHtml :: tag('span', isset($item['linkOptions']) ? $item['linkOptions'] : array(), $item['label']);
        
        
        
        if (isset($this->itemTemplate) || isset($item['template'])) {
            $template = isset($item['template']) ? $item['template'] : $this->itemTemplate;
            echo strtr($template, array('{menu}' => $menu));
        } else
            return $menu;
        
//        if (isset($item['url'])) {
//            $label = $this->linkLabelWrapper === null ? $item['label'] : CHtml::tag($this->linkLabelWrapper, $this->linkLabelWrapperHtmlOptions, $item['label']);
//            return CHtml::link($label, $item['url'], isset($item['linkOptions']) ? $item['linkOptions'] : array());
//        } else
//            return CHtml::tag('span', isset($item['linkOptions']) ? $item['linkOptions'] : array(), $item['label']);
    }

}

?>