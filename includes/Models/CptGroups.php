<?php
namespace NACSL\Models;

use NACSL\Models\ViewModels\CptLabelsVm;
use NACSL\Utilities\AppConstants;

class CptGroups extends CustomPostType
{
    public function __construct(string $name, CptLabelsVm $labels)
    {
        $this->name = AppConstants::PREFIX . $name;
        $this->labels = $labels;
        $this->description = __("Groupes faisant partie de Narcotique Anonymes.", AppConstants::TEXT_DOMAIN);
        $this->rest_base = "groupes";
        $this->menu_position = -11;
        $this->menu_icon = AppConstants::$adminUrl . "images/logo-na.svg";
        $this->rewrite['slug'] = 'groupes';
    }    
}
