<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    use \Codeception\Task\MergeReports;
    use \Codeception\Task\SplitTestsByGroups;

    public function parallelSplitTests()
    {
	    $this->taskSplitTestFilesByGroups(4)
        ->projectRoot('.')
        ->testsFrom('tests/acceptance')
        ->groupsTo('tests/_log/p')
        ->run();
    }

    public function parallelRun()
    {
    	$parallel = $this->taskParallelExec();
        for ($i = 1; $i <= 4; $i++) {            
            $parallel->process(
                $this->taskCodecept() // use built-in Codecept task
                ->suite('acceptance') // run acceptance tests
                ->group("p$i")        // for all p* groups
            );
        }
        return $parallel->run();
    }

    public function parallelMergeResults()
    {
    	$merge = $this->taskMergeXmlReports();
        for ($i=1; $i<=4; $i++) {
            $merge->from("/tests/_log/result_$i.xml");
        }
        $merge->into("/tests/_log/result.xml")
            ->run();
    }

    function parallelAll()
    {
        $this->parallelSplitTests();
        $result = $this->parallelRun();
        return $result;
    }

}