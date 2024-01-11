<?php

namespace Webkul\PackageGenerator\Console\Command;

class ShopRouteMakeCommand extends MakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package:make-shop-vite-js {package} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new shop vite js file.';

    /**
     * @return mixed
     */
    protected function getStubContents()
    {
        return $this->packageGenerator->getStubContents('vite-config', $this->getStubVariables());
    }

    /**
     * @return array
     */
    protected function getStubVariables()
    {
        return [
            'CONTROLLER_CLASS_NAME' => $this->getClassNamespace($this->argument('package') . '/Http/Controllers/Shop/' . $this->getStudlyName() . 'Controller'),
            'LOWER_NAME'            => $this->getLowerName(),
        ];
    }

    /**
     * @return string
     */
    protected function getSourceFilePath()
    {
        return base_path('packages/' . $this->argument('package')) . '/vite.config.js';
    }
}
