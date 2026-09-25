<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DebugConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $maxItems;
    private $minDepth;
    private $maxStringLength;
    private $dumpDestination;
    private $theme;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * Max number of displayed items past the first level, -1 means no limit.
     * @default 2500
     * @param ParamConfigurator|int $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function maxItems($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['maxItems'] = true;
        $this->maxItems = $value;

        return $this;
    }

    /**
     * Minimum tree depth to clone all the items, 1 is default.
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function minDepth($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['minDepth'] = true;
        $this->minDepth = $value;

        return $this;
    }

    /**
     * Max length of displayed strings, -1 means no limit.
     * @default -1
     * @param ParamConfigurator|int $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function maxStringLength($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['maxStringLength'] = true;
        $this->maxStringLength = $value;

        return $this;
    }

    /**
     * A stream URL where dumps should be written to.
     * @example php://stderr, or tcp://%env(VAR_DUMPER_SERVER)% when using the "server:dump" command
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function dumpDestination($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['dumpDestination'] = true;
        $this->dumpDestination = $value;

        return $this;
    }

    /**
     * Changes the color of the dump() output when rendered directly on the templating. "dark" (default) or "light".
     * @example dark
     * @default 'dark'
     * @param ParamConfigurator|'dark'|'light' $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function theme($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['theme'] = true;
        $this->theme = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'debug';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('max_items', $config)) {
            $this->_usedProperties['maxItems'] = true;
            $this->maxItems = $config['max_items'];
            unset($config['max_items']);
        }

        if (array_key_exists('min_depth', $config)) {
            $this->_usedProperties['minDepth'] = true;
            $this->minDepth = $config['min_depth'];
            unset($config['min_depth']);
        }

        if (array_key_exists('max_string_length', $config)) {
            $this->_usedProperties['maxStringLength'] = true;
            $this->maxStringLength = $config['max_string_length'];
            unset($config['max_string_length']);
        }

        if (array_key_exists('dump_destination', $config)) {
            $this->_usedProperties['dumpDestination'] = true;
            $this->dumpDestination = $config['dump_destination'];
            unset($config['dump_destination']);
        }

        if (array_key_exists('theme', $config)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = $config['theme'];
            unset($config['theme']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxItems'])) {
            $output['max_items'] = $this->maxItems;
        }
        if (isset($this->_usedProperties['minDepth'])) {
            $output['min_depth'] = $this->minDepth;
        }
        if (isset($this->_usedProperties['maxStringLength'])) {
            $output['max_string_length'] = $this->maxStringLength;
        }
        if (isset($this->_usedProperties['dumpDestination'])) {
            $output['dump_destination'] = $this->dumpDestination;
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
