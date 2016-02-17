<?php

class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
     public function createApplication()
     {
         $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';
         // $app->register('Path\To\Your\PackageServiceProvider');
         $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
         return $app;
     }

     /**
     * Setup DB before each test.
     *
     * @return void
     */
     /* public function setUp()
     {
         parent::setUp();
         $this->app['config']->set('database.default','sqlite');
         $this->app['config']->set('database.connections.sqlite.database', ':memory:');
         $this->migrate();
     } */

     /**
     * run package database migrations
     *
     * @return void
     */
     /* public function migrate()
     {
         $fileSystem = new Filesystem;
         $classFinder = new ClassFinder;

         foreach($fileSystem->files(__DIR__ . "/../src/Migrations") as $file)
         {
             $fileSystem->requireOnce($file);
             $migrationClass = $classFinder->findClass($file);

             (new $migrationClass)->up();
         }
     } */
}
