<?php

class layout_Email_html_8b0180b19fa73737f0d83288d94c0851d0dae2f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments0 = array();
$arguments0['section'] = NULL;
$arguments0['partial'] = NULL;
$arguments0['delegate'] = NULL;
$arguments0['renderable'] = NULL;
$arguments0['arguments'] = array (
);
$arguments0['optional'] = false;
$arguments0['default'] = NULL;
$arguments0['contentAs'] = NULL;
$arguments0['debug'] = true;
$arguments0['section'] = 'main';

return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#