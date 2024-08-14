<?php
// Template Method
abstract class DocumentProcessor
{
    final public function processDocument()
    {
        $this->openFile();
        $data = $this->extractData();
        $this->analyzeData($data);
        $this->closeFile();
    }

    abstract protected function openFile();
    abstract protected function extractData();

    protected function analyzeData($data)
    {
        echo "Analyzing data...\n";
    }

    protected function closeFile()
    {
        echo "Closing file...\n";
    }
}