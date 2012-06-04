<?php
namespace Striide\DebugBundle\Extension;

class TwigDebugExtension extends \Twig_Extension
{
  public function getFilters() 
  {
    return array(
      'var_dump' => new \Twig_Filter_Function('var_dump') ,
      'print_r' => new \Twig_Filter_Function('print_r') ,
    );
  }
  public function getName() 
  {
    return 'striide_twig_debug_extension';
  }
}
