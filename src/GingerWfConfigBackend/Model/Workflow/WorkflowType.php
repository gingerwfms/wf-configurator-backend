<?php
/*
 * This file is part of the codeliner/ginger-wfms package.
 * (c) Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GingerWfConfigBackend\Model\Workflow;

use Ginger\Core\Repository\Resource\ResourceType;
/**
 *  WorkflowType
 * 
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
class WorkflowType extends ResourceType
{
    public function __construct()
    {
        parent::__construct('workflow');
    }
}
