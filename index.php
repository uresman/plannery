<?php
// index.php

// Show errors (good for development)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Simple response
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "  <meta charset='UTF-8'>";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "  <title>Plannery</title>";
echo "</head>";
echo "<body style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
echo "  <h1>✅ Plannery is running!</h1>";
echo "  <p>Your PHP app has been deployed successfully.</p>";
echo "  <p><strong>Server time:</strong> " . date('Y-m-d H:i:s') . "</p>";
echo "</body>";
echo "</html>";
