<?php
include "abstractClass.php";

// Concrete class for DOC files
class DocProcessor extends DocumentProcessor
{
    protected function openFile()
    {
        echo "Opening DOC file...\n";
    }

    protected function extractData()
    {
        echo "Extracting data from DOC file...\n";
        return "DOC Data";
    }
}

// Concrete class for PDF files
class PdfProcessor extends DocumentProcessor
{
    protected function openFile()
    {
        echo "Opening PDF file...\n";
    }

    protected function extractData()
    {
        echo "Extracting data from PDF file...\n";
        return "PDF Data";
    }
}

// Concrete class for CSV files
class CsvProcessor extends DocumentProcessor
{
    protected function openFile()
    {
        echo "Opening CSV file...\n";
    }

    protected function extractData()
    {
        echo "Extracting data from CSV file...\n";
        return "CSV Data";
    }
}