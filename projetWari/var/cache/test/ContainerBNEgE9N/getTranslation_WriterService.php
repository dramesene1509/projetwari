<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.writer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Writer/TranslationWriter.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/DumperInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/FileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/PoFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/MoFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/QtFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/IniFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
include_once $this->targetDirs[3].'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

$this->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

$instance->addDumper('php', ($this->privates['translation.dumper.php'] ?? ($this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper())));
$instance->addDumper('xlf', ($this->privates['translation.dumper.xliff'] ?? ($this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper())));
$instance->addDumper('po', ($this->privates['translation.dumper.po'] ?? ($this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper())));
$instance->addDumper('mo', ($this->privates['translation.dumper.mo'] ?? ($this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper())));
$instance->addDumper('yml', ($this->privates['translation.dumper.yml'] ?? ($this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper())));
$instance->addDumper('yaml', ($this->privates['translation.dumper.yaml'] ?? ($this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'))));
$instance->addDumper('ts', ($this->privates['translation.dumper.qt'] ?? ($this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper())));
$instance->addDumper('csv', ($this->privates['translation.dumper.csv'] ?? ($this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper())));
$instance->addDumper('ini', ($this->privates['translation.dumper.ini'] ?? ($this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper())));
$instance->addDumper('json', ($this->privates['translation.dumper.json'] ?? ($this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper())));
$instance->addDumper('res', ($this->privates['translation.dumper.res'] ?? ($this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper())));

return $instance;
