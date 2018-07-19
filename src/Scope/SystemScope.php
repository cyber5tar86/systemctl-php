<?php
declare(strict_types=1);

namespace SystemCtl\Scope;

/**
 * SystemScope
 *
 * @package SystemCtl\Scope
 * @author  icanhazstring <blubb0r05+github@gmail.com>
 */
class SystemScope implements ScopeInterface
{
    /**
     * @inheritdoc
     */
    public function getArgument(): string
    {
        return '--' . $this->getName();
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'system';
    }
}