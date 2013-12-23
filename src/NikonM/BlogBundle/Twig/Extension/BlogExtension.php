<?php
/**
 * Created by PhpStorm.
 * User: nikon
 * Date: 21.12.13
 * Time: 15:44
 */

namespace NikonM\BlogBundle\Twig\Extension;


class BlogExtension extends \Twig_Extension {

    public function getName()
    {
        return 'tagsExtension';
    }

    public function getFunctions()
    {
        return [
            'nodesRender'=> new \Twig_Function_Method($this, 'nodesRender', ['needs_environment' => true])
        ];
    }

    public function nodesRender(\Twig_Environment $environment, $nodes)
    {
        $output = '';
        foreach ($nodes as $node) {
            $output .= $environment->render('BlogBundle:Ext:node.html.twig', $node);
        }
        return $output;
    }
} 