<?php

namespace App\Containers\AppSection\Documentation\UI\CLI\Commands;

use App\Containers\AppSection\Documentation\Actions\GenerateDocumentationAction;
use App\Ship\Abstracts\Commands\ConsoleCommand as AbstractConsoleCommand;

class GenerateApiDocsCommand extends AbstractConsoleCommand
{
	protected $signature = "kocek:apidoc";

	protected $description = "Generate API Documentations with (API-Doc-JS)";

	public function handle(): void
	{
		app(GenerateDocumentationAction::class)->run($this);
	}
}
