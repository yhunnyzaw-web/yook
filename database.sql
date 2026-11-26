-- ============================================================
-- SmartQR Restaurant Ordering System
-- Database: smartqr_restaurant
-- Phase 1: Initial Setup (Phase 2 will add all tables)
-- ============================================================

-- Step 1: Create the database
CREATE DATABASE IF NOT EXISTS smartqr_restaurant
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- Step 2: Select the database
USE smartqr_restaurant;

-- ============================================================
-- NOTE: Full table structure will be added in Phase 2.
-- For now, run the above two commands to create the database
-- and verify that PHP can connect to it successfully.
-- ============================================================

-- Quick test: Create a test table (will be removed in Phase 2)
CREATE TABLE IF NOT EXISTS connection_test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a test record
INSERT INTO connection_test (message) VALUES ('SmartQR database connection successful!');

-- Verify the record
SELECT * FROM connection_test;
