<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Turbo'.\DIRECTORY_SEPARATOR.'BroadcastConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class TurboConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $broadcast;
    private $defaultTransport;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":true,"entity_template_prefixes":{"App\\Entity\\":"broadcast\/"},"doctrine_orm":{"enabled":true}}
     * @return \Symfony\Config\Turbo\BroadcastConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Turbo\BroadcastConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function broadcast(array|bool $value = []): \Symfony\Config\Turbo\BroadcastConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['broadcast'] = true;
            $this->broadcast = $value;

            return $this;
        }

        if (!$this->broadcast instanceof \Symfony\Config\Turbo\BroadcastConfig) {
            $this->_usedProperties['broadcast'] = true;
            $this->broadcast = new \Symfony\Config\Turbo\BroadcastConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "broadcast()" has already been initialized. You cannot pass values the second time you call broadcast().');
        }

        return $this->broadcast;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultTransport($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultTransport'] = true;
        $this->defaultTransport = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'turbo';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('broadcast', $config)) {
            $this->_usedProperties['broadcast'] = true;
            $this->broadcast = \is_array($config['broadcast']) ? new \Symfony\Config\Turbo\BroadcastConfig($config['broadcast']) : $config['broadcast'];
            unset($config['broadcast']);
        }

        if (array_key_exists('default_transport', $config)) {
            $this->_usedProperties['defaultTransport'] = true;
            $this->defaultTransport = $config['default_transport'];
            unset($config['default_transport']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['broadcast'])) {
            $output['broadcast'] = $this->broadcast instanceof \Symfony\Config\Turbo\BroadcastConfig ? $this->broadcast->toArray() : $this->broadcast;
        }
        if (isset($this->_usedProperties['defaultTransport'])) {
            $output['default_transport'] = $this->defaultTransport;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
