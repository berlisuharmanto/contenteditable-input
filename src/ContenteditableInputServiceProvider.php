<?php

namespace Berlisuharmanto\ContenteditableInput;

use Berlisuharmanto\ContenteditableInput\Testing\TestsContenteditableInput;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ContenteditableInputServiceProvider extends PackageServiceProvider
{
    public static string $name = 'contenteditable-input';

    public static string $viewNamespace = 'contenteditable-input';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('berlisuharmanto/contenteditable-input');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    // public function packageBooted(): void
    // {
    //     FilamentAsset::register(
    //         $this->getAssets(),
    //         $this->getAssetPackageName()
    //     );
    //
    //     FilamentAsset::registerScriptData(
    //         $this->getScriptData(),
    //         $this->getAssetPackageName()
    //     );
    //
    //     FilamentIcon::register($this->getIcons());
    //
    //     // Testing
    //     Testable::mixin(new TestsContenteditableInput);
    // }

    protected function getAssetPackageName(): ?string
    {
        return 'berlisuharmanto/contenteditable-input';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('contenteditable-input', __DIR__ . '/../resources/dist/components/contenteditable-input.js'),
            Css::make('contenteditable-input-styles', __DIR__ . '/../resources/dist/contenteditable-input.css'),
            Js::make('contenteditable-input-scripts', __DIR__ . '/../resources/dist/contenteditable-input.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [];
    }
}
