<?php  //[STAMP] e47f8a37a43512941cf3b1614b258cef
// phpcs:ignoreFile
namespace Kafkiansky\ServiceLocatorInterrupter\Tests\_generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build

trait AcceptanceTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes a shell command.
     * Fails if exit code is > 0. You can disable this by passing `false` as second argument
     *
     * ```php
     * <?php
     * $I->runShellCommand('phpunit');
     *
     * // do not fail test when command fails
     * $I->runShellCommand('phpunit', false);
     * ```
     * @see \Codeception\Module\Cli::runShellCommand()
     */
    public function runShellCommand(string $command, bool $failNonZero = true): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runShellCommand', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that output from last executed command contains text
     * @see \Codeception\Module\Cli::seeInShellOutput()
     */
    public function seeInShellOutput(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeInShellOutput', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks that output from last executed command contains text
     * @see \Codeception\Module\Cli::seeInShellOutput()
     */
    public function canSeeInShellOutput(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeInShellOutput', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that output from latest command doesn't contain text
     * @see \Codeception\Module\Cli::dontSeeInShellOutput()
     */
    public function dontSeeInShellOutput(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInShellOutput', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks that output from latest command doesn't contain text
     * @see \Codeception\Module\Cli::dontSeeInShellOutput()
     */
    public function cantSeeInShellOutput(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInShellOutput', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Cli::seeShellOutputMatches()
     */
    public function seeShellOutputMatches(string $regex): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeShellOutputMatches', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     *
     * @see \Codeception\Module\Cli::seeShellOutputMatches()
     */
    public function canSeeShellOutputMatches(string $regex): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeShellOutputMatches', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the output from latest command
     * @see \Codeception\Module\Cli::grabShellOutput()
     */
    public function grabShellOutput(): string {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabShellOutput', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks result code. To verify a result code > 0, you need to pass `false` as second argument to `runShellCommand()`
     *
     * ```php
     * <?php
     * $I->seeResultCodeIs(0);
     * ```
     * @see \Codeception\Module\Cli::seeResultCodeIs()
     */
    public function seeResultCodeIs(int $code): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeResultCodeIs', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks result code. To verify a result code > 0, you need to pass `false` as second argument to `runShellCommand()`
     *
     * ```php
     * <?php
     * $I->seeResultCodeIs(0);
     * ```
     * @see \Codeception\Module\Cli::seeResultCodeIs()
     */
    public function canSeeResultCodeIs(int $code): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeResultCodeIs', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks result code
     *
     * ```php
     * <?php
     * $I->seeResultCodeIsNot(0);
     * ```
     * @see \Codeception\Module\Cli::seeResultCodeIsNot()
     */
    public function seeResultCodeIsNot(int $code): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeResultCodeIsNot', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks result code
     *
     * ```php
     * <?php
     * $I->seeResultCodeIsNot(0);
     * ```
     * @see \Codeception\Module\Cli::seeResultCodeIsNot()
     */
    public function canSeeResultCodeIsNot(int $code): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeResultCodeIsNot', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Enters a directory In local filesystem.
     * Project root directory is used by default
     * @see \Codeception\Module\Filesystem::amInPath()
     */
    public function amInPath(string $path): void {
        $this->getScenario()->runStep(new \Codeception\Step\Condition('amInPath', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opens a file and stores it's content.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ```
     * @see \Codeception\Module\Filesystem::openFile()
     */
    public function openFile(string $filename): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('openFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes a file
     *
     * ``` php
     * <?php
     * $I->deleteFile('composer.lock');
     * ```
     * @see \Codeception\Module\Filesystem::deleteFile()
     */
    public function deleteFile(string $filename): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('deleteFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes directory with all subdirectories
     *
     * ``` php
     * <?php
     * $I->deleteDir('vendor');
     * ```
     * @see \Codeception\Module\Filesystem::deleteDir()
     */
    public function deleteDir(string $dirname): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('deleteDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Copies directory with all contents
     *
     * ``` php
     * <?php
     * $I->copyDir('vendor','old_vendor');
     * ```
     * @see \Codeception\Module\Filesystem::copyDir()
     */
    public function copyDir(string $src, string $dst): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('copyDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ```
     * @see \Codeception\Module\Filesystem::seeInThisFile()
     */
    public function seeInThisFile(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeInThisFile', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ```
     * @see \Codeception\Module\Filesystem::seeInThisFile()
     */
    public function canSeeInThisFile(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeInThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has the `number` of new lines.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeNumberNewLines(5);
     * ```
     *
     * @param int $number New lines
     * @see \Codeception\Module\Filesystem::seeNumberNewLines()
     */
    public function seeNumberNewLines(int $number): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeNumberNewLines', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks If opened file has the `number` of new lines.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeNumberNewLines(5);
     * ```
     *
     * @param int $number New lines
     * @see \Codeception\Module\Filesystem::seeNumberNewLines()
     */
    public function canSeeNumberNewLines(int $number): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeNumberNewLines', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that contents of currently opened file matches $regex
     * @see \Codeception\Module\Filesystem::seeThisFileMatches()
     */
    public function seeThisFileMatches(string $regex): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThisFileMatches', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks that contents of currently opened file matches $regex
     * @see \Codeception\Module\Filesystem::seeThisFileMatches()
     */
    public function canSeeThisFileMatches(string $regex): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeThisFileMatches', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more than expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ```
     * @see \Codeception\Module\Filesystem::seeFileContentsEqual()
     */
    public function seeFileContentsEqual(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeFileContentsEqual', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more than expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ```
     * @see \Codeception\Module\Filesystem::seeFileContentsEqual()
     */
    public function canSeeFileContentsEqual(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeFileContentsEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->dontSeeInThisFile('codeception/codeception');
     * ```
     * @see \Codeception\Module\Filesystem::dontSeeInThisFile()
     */
    public function dontSeeInThisFile(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInThisFile', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->dontSeeInThisFile('codeception/codeception');
     * ```
     * @see \Codeception\Module\Filesystem::dontSeeInThisFile()
     */
    public function cantSeeInThisFile(string $text): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes a file
     * @see \Codeception\Module\Filesystem::deleteThisFile()
     */
    public function deleteThisFile(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('deleteThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ```
     * @see \Codeception\Module\Filesystem::seeFileFound()
     */
    public function seeFileFound(string $filename, string $path = ""): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeFileFound', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ```
     * @see \Codeception\Module\Filesystem::seeFileFound()
     */
    public function canSeeFileFound(string $filename, string $path = ""): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeFileFound', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file does not exist in path
     * @see \Codeception\Module\Filesystem::dontSeeFileFound()
     */
    public function dontSeeFileFound(string $filename, string $path = ""): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeFileFound', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * Checks if file does not exist in path
     * @see \Codeception\Module\Filesystem::dontSeeFileFound()
     */
    public function cantSeeFileFound(string $filename, string $path = ""): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeFileFound', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Erases directory contents
     *
     * ``` php
     * <?php
     * $I->cleanDir('logs');
     * ```
     * @see \Codeception\Module\Filesystem::cleanDir()
     */
    public function cleanDir(string $dirname): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('cleanDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Saves contents to file
     * @see \Codeception\Module\Filesystem::writeToFile()
     */
    public function writeToFile(string $filename, string $contents): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('writeToFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string[] $options
     * @see \Weirdan\Codeception\Psalm\Module::runPsalmOn()
     */
    public function runPsalmOn(string $filename, array $options = []): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runPsalmOn', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string[] $options
     * @see \Weirdan\Codeception\Psalm\Module::runPsalmIn()
     */
    public function runPsalmIn(string $dir, array $options = []): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runPsalmIn', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param int|string $exitCode
     * @Then I see exit code :code
     * @see \Weirdan\Codeception\Psalm\Module::seeExitCode()
     */
    public function seeExitCode($exitCode): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeExitCode', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * @param int|string $exitCode
     * @Then I see exit code :code
     * @see \Weirdan\Codeception\Psalm\Module::seeExitCode()
     */
    public function canSeeExitCode($exitCode): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeExitCode', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Weirdan\Codeception\Psalm\Module::seeThisError()
     */
    public function seeThisError(string $type, string $message): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThisError', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     *
     * @see \Weirdan\Codeception\Psalm\Module::seeThisError()
     */
    public function canSeeThisError(string $type, string $message): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeThisError', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Then I see no errors
     * @Then I see no other errors
     * @see \Weirdan\Codeception\Psalm\Module::seeNoErrors()
     */
    public function seeNoErrors(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeNoErrors', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * @Then I see no errors
     * @Then I see no other errors
     * @see \Weirdan\Codeception\Psalm\Module::seeNoErrors()
     */
    public function canSeeNoErrors(): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeNoErrors', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @deprecated
     * This method is only to maintain the public API; please use `self::haveADependencySatisfied` instead.
     * @see \Weirdan\Codeception\Psalm\Module::seePsalmVersionIs()
     */
    public function seePsalmVersionIs(string $operator, string $version): bool {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seePsalmVersionIs', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * @deprecated
     * This method is only to maintain the public API; please use `self::haveADependencySatisfied` instead.
     * @see \Weirdan\Codeception\Psalm\Module::seePsalmVersionIs()
     */
    public function canSeePsalmVersionIs(string $operator, string $version): bool {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seePsalmVersionIs', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|PyStringNode $code
     *
     * @Given I have the following code preamble :code
     * @see \Weirdan\Codeception\Psalm\Module::haveTheFollowingCodePreamble()
     */
    public function haveTheFollowingCodePreamble($code): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveTheFollowingCodePreamble', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @When I run psalm
     * @When I run Psalm
     * @see \Weirdan\Codeception\Psalm\Module::runPsalm()
     */
    public function runPsalm(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runPsalm', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @When I run Psalm with dead code detection
     * @When I run psalm with dead code detection
     * @see \Weirdan\Codeception\Psalm\Module::runPsalmWithDeadCodeDetection()
     */
    public function runPsalmWithDeadCodeDetection(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runPsalmWithDeadCodeDetection', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Weirdan\Codeception\Psalm\Module::seePsalmHasTaintAnalysis()
     */
    public function seePsalmHasTaintAnalysis(): bool {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seePsalmHasTaintAnalysis', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     *
     * @see \Weirdan\Codeception\Psalm\Module::seePsalmHasTaintAnalysis()
     */
    public function canSeePsalmHasTaintAnalysis(): bool {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seePsalmHasTaintAnalysis', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Given I have Psalm with taint analysis
     * @Given I have psalm with taint analysis
     * @see \Weirdan\Codeception\Psalm\Module::havePsalmWithTaintAnalysis()
     */
    public function havePsalmWithTaintAnalysis(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('havePsalmWithTaintAnalysis', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @When I run Psalm with taint analysis
     * @When I run psalm with taint analysis
     * @see \Weirdan\Codeception\Psalm\Module::runPsalmWithTaintAnalysis()
     */
    public function runPsalmWithTaintAnalysis(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runPsalmWithTaintAnalysis', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @When I run Psalm on :arg1
     * @When I run psalm on :arg1
     * @see \Weirdan\Codeception\Psalm\Module::runPsalmOnASingleFile()
     */
    public function runPsalmOnASingleFile(string $file): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('runPsalmOnASingleFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|PyStringNode $config
     * @Given I have the following config :config
     * @see \Weirdan\Codeception\Psalm\Module::haveTheFollowingConfig()
     */
    public function haveTheFollowingConfig($config): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveTheFollowingConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|PyStringNode $code
     * @Given I have the following code :code
     * @see \Weirdan\Codeception\Psalm\Module::haveTheFollowingCode()
     */
    public function haveTheFollowingCode($code): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveTheFollowingCode', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Given I have some future Psalm that supports this feature :ref
     * @see \Weirdan\Codeception\Psalm\Module::haveSomeFuturePsalmThatSupportsThisFeature()
     */
    public function haveSomeFuturePsalmThatSupportsThisFeature(string $ref): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveSomeFuturePsalmThatSupportsThisFeature', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Given /I have Psalm (newer than|older than) "([0-9.]+)" \(because of "([^"]+)"\)/
     * @see \Weirdan\Codeception\Psalm\Module::havePsalmOfACertainVersionRangeBecauseOf()
     */
    public function havePsalmOfACertainVersionRangeBecauseOf(string $operator, string $version, string $reason): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('havePsalmOfACertainVersionRangeBecauseOf', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Then I see these errors
     * @see \Weirdan\Codeception\Psalm\Module::seeTheseErrors()
     */
    public function seeTheseErrors(\Behat\Gherkin\Node\TableNode $list): void {
        $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeTheseErrors', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won't be stopped on fail
     * @Then I see these errors
     * @see \Weirdan\Codeception\Psalm\Module::seeTheseErrors()
     */
    public function canSeeTheseErrors(\Behat\Gherkin\Node\TableNode $list): void {
        $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeTheseErrors', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|PyStringNode $code
     * @Given I have the following code in :arg1 :arg2
     * @see \Weirdan\Codeception\Psalm\Module::haveTheFollowingCodeIn()
     */
    public function haveTheFollowingCodeIn(string $filename, $code): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveTheFollowingCodeIn', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Given I have the following autoload map
     * @Given I have the following classmap
     * @Given I have the following class map
     * @see \Weirdan\Codeception\Psalm\Module::haveTheFollowingAutoloadMap()
     */
    public function haveTheFollowingAutoloadMap(\Behat\Gherkin\Node\TableNode $list): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveTheFollowingAutoloadMap', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Given I have the :package package satisfying the :versionConstraint
     * @see \Weirdan\Codeception\Psalm\Module::haveADependencySatisfied()
     */
    public function haveADependencySatisfied(string $package, string $versionConstraint): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('haveADependencySatisfied', func_get_args()));
    }
}
