
<?php
class behat4eve2Task extends sfBaseTask{

  protected function configure() {
    $this->addArguments(array(
      new sfCommandArgument('plugin', sfCommandArgument::REQUIRED, 'Folder of the plugin')
    ));
    $this->addOptions(array(
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
    ));
    $this->namespace = 'e-venement';
    $this->name = 'behat';
    $this->briefDescription = 'Launch behat';
    $this->detailedDescription = <<<EOF
      ./symfony e-venement:behat
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    $behat = dirname(dirname(dirname(__FILE__)));

    $pluginDir = sfConfig::get('sf_root_dir') . '/plugins';
    $folder = $pluginDir . '/' . $arguments['plugin'];

    // if le dossier existe
    // id le fichier de conf existe

    echo passthru('php behat --colors -c ' . $folder . '/config/behat.yml');
    echo "\n";

  }
}
