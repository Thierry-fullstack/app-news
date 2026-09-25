<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StimulusConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $controllerPaths;
    private $controllersJson;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function controllerPaths(ParamConfigurator|array $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['controllerPaths'] = true;
        $this->controllerPaths = $value;

        return $this;
    }

    /**
     * @default '%kernel.project_dir%/assets/controllers.json'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function controllersJson($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['controllersJson'] = true;
        $this->controllersJson = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'stimulus';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('controller_paths', $config)) {
            $this->_usedProperties['controllerPaths'] = true;
            $this->controllerPaths = $config['controller_paths'];
            unset($config['controller_paths']);
        }

        if (array_key_exists('controllers_json', $config)) {
            $this->_usedProperties['controllersJson'] = true;
            $this->controllersJson = $config['controllers_json'];
            unset($config['controllers_json']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['controllerPaths'])) {
            $output['controller_paths'] = $this->controllerPaths;
        }
        if (isset($this->_usedProperties['controllersJson'])) {
            $output['controllers_json'] = $this->controllersJson;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
