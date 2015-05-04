<?php
namespace Victoire\Widget\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetLogin
 *
 * @ORM\Table("vic_widget_login")
 * @ORM\Entity
 */
class WidgetLogin extends Widget
{

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return 'Login #'.$this->id;
    }


}
