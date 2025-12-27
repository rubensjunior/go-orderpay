<?php
// Database Type : "PostgreSQL"
// Database Adapter : "postgres"
$exports = <<<'JSON'
{
    "name": "db",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "postgres",
        "databaseType": "PostgreSQL",
        "connectionString": "pgsql:dbname=postgres;user=postgres.pvqarzmgbiilpgifehgj;password=@Recursos#025@;host=aws-1-sa-east-1.pooler.supabase.com;port=6543"
    }
}
JSON;
?>