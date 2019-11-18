<?php

namespace Connectum;

use Connectum\Bootstrap\Application;
use \Exception as ConnectumException;

class Connectum
{

    /**
     * @var Application|null
     */
    public $application = null;

    /**
     * Connectum constructor.
     * @param string|null $login
     * @param string|null $password
     * @param string|null $timeout
     * @param string|null $apiVersion
     * @param string|null $url
     * @param string|null $configPath
     * @throws ConnectumException
     */
    public function __construct(?string $login = null,
                                ?string $password = null,
                                ?string $timeout = null,
                                ?string $apiVersion = null,
                                ?string $url = null,
                                ?string $configPath = null)
    {
        $this->application = Application::getInstance();
        $this->setConfig($configPath);

        if ($login && $password) {
            $config = $this->application->getConfig();
            $config['CONNECTUM_LOGIN'] = $login ?? $config['CONNECTUM_LOGIN'];
            $config['CONNECTUM_PASSWORD'] = $password ?? $config['CONNECTUM_PASSWORD'];
            $config['timeoutForEachRequests'] = $timeout ?? $config['timeoutForEachRequests'];
            $config['apiVersion'] = $apiVersion ?? $config['apiVersion'];
            $config['url'] = $url ?? $config['url'];

            $this->application->setConfig($config);
        }

        $loader = require __DIR__. '../../../../../../vendor/autoload.php'; // path for package
        //$loader = require __DIR__. '../../../vendor/autoload.php'; // path for local development
        $loader->setPsr4('Connectum\\Entity\\Custom\\', $this->application->getConfig()['modelsPath']);

    }

    /**
     * @param string|null $path
     * @throws ConnectumException
     */
    public function setConfig(?string $path = null)
    {

        $configFile = [];

        if ($path)
        {
            if (!file_exists($path))
                throw new ConnectumException('Config file not found, check your path, current path: '.__DIR__);

            if ($this->isLaravelInstalled()) {
                if (function_exists('config'))
                    $configFile = config('ConnectumConfig');
            }else{
                $configFile = include $path;
            }

        }

        if (!$path)
            $configFile = include 'Config/ConnectumConfig.php';

        $this->application->setConfig($configFile);
    }

    /**
     * If Laravel installed will return version.
     *
     * @return string|null
     */
    public function isLaravelInstalled(): ?string
    {
        $isLaravelVersion = null;

        if (function_exists('app')){
            $isLaravelVersion = app()->version();
        }

        return $isLaravelVersion;
    }

}
