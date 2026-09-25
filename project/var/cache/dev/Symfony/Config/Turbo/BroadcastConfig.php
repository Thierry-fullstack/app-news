<?php

namespace Symfony\Config\Turbo;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Broadcast'.\DIRECTORY_SEPARATOR.'DoctrineOrmConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BroadcastConfig 
{
    private $enabled;
    private $entityTemplatePrefixes;
    private $doctrineOrm;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function entityTemplatePrefixes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['entityTemplatePrefixes'] = true;
        $this->entityTemplatePrefixes = $value;

        return $this;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * Enable the Doctrine ORM integration
     * @default {"enabled":true}
     * @return \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig : static)
     */
    public function doctrineOrm(array|bool $value = []): \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = $value;

            return $this;
        }

        if (!$this->doctrineOrm instanceof \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = new \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "doctrineOrm()" has already been initialized. You cannot pass values the second time you call doctrineOrm().');
        }

        return $this->doctrineOrm;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('entity_template_prefixes', $config)) {
            $this->_usedProperties['entityTemplatePrefixes'] = true;
            $this->entityTemplatePrefixes = $config['entity_template_prefixes'];
            unset($config['entity_template_prefixes']);
        }

        if (array_key_exists('doctrine_orm', $config)) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = \is_array($config['doctrine_orm']) ? new \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig($config['doctrine_orm']) : $config['doctrine_orm'];
            unset($config['doctrine_orm']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['entityTemplatePrefixes'])) {
            $output['entity_template_prefixes'] = $this->entityTemplatePrefixes;
        }
        if (isset($this->_usedProperties['doctrineOrm'])) {
            $output['doctrine_orm'] = $this->doctrineOrm instanceof \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig ? $this->doctrineOrm->toArray() : $this->doctrineOrm;
        }

        return $output;
    }

}
