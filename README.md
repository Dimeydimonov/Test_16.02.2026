 OOP PHP Page Generator - Test Assignment

A clean PHP 8.1+ application demonstrating modern object-oriented programming principles with MVC architecture and Repository pattern. Built as a test assignment to showcase professional PHP development skills and clean architecture implementation.

[PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat-square&logo=php)
[PSR-4](https://img.shields.io/badge/PSR--4-Autoloading-blue?style=flat-square)
[OOP](https://img.shields.io/badge/Architecture-OOP%20MVC-green?style=flat-square)
[Repository Pattern](https://img.shields.io/badge/Pattern-Repository-orange?style=flat-square)
Project Overview

This application renders model cards using a clean MVC architecture with proper separation of concerns. It demonstrates professional PHP development practices including dependency injection, interface segregation, and the Repository pattern for data abstraction.
 Key Features

Clean MVC Architecture- Proper separation of Model, View, and Controller layers
Repository Pattern - Abstracted data layer supporting multiple data sources
PSR-4 Autoloading- Modern PHP autoloading standards
Interface-Driven Design - Flexible and extensible architecture
JSON Data Source - File-based data storage with easy extensibility
Template Engine - Simple PHP template rendering system
Dependency Injection - Loose coupling between components

Architecture Principles
Clean Architecture Layers

 Controller                 ← Coordinates all components
 Service                    ← Business logic layer
 Repository                 ← Data abstraction layer
 DataProvider               ← Data source interface
Model + View + Config       ← Core components



Design Patterns Implemented
Repository Pattern- Encapsulates data access logic
Dependency Injection - Injects dependencies via constructor
Interface Segregation- DataProviderInterface for flexibility
Single Responsibility - Each class has one clear purpose
Open/Closed Principle - Extensible without modification

Tech Stack

PHP:8.1+ with strict typing 
Architecture:MVC with Repository pattern 
Autoloading: PSR-4 standard 
Data Source: JSON file storage 
Templates: Native PHP templating 
Dependency Management:** Composer

Quick Start

Prerequisites 
PHP 8.1 or higher 
Composer

Installation

Clone the repository**
bash
git clone https://github.com/Dimeydimonov/test_16.02.2026.git
cd Test_16.02.2026


Install dependencies**
bash
composer install


Start development server**
bash
php -S localhost:8000

Open in browser**

http://localhost:8000


 Project Structure


config.php               Application configuration
index.php                Application entry point
composer.json             Dependencies and PSR-4 autoloading
data/
─ models.json          Model data source
src/
── Config.php           Configuration management class
─ Controller/
 ── PageController.php     Main page controller
── DataProvider/
   ── DataProviderInterface.php   Data source interface
 ─ JsonDataProvider.php        JSON file data provider
─ Model/
  ─ Model.php               Model entity with getters
── Repository/
 ── ModelRepository.php     Data transformation layer
── Service/
   ── ModelService.php       Business logic layer
   ── View/
      ── ViewRenderer.php        Template rendering engine
── templates/                PHP template files
── public/
    ── css/                Stylesheets


Architecture Components
DataProvider Layer
interface-driven data abstraction**
php
interface DataProviderInterface
{
    public function fetchAll(): array;
}


implementations:
JsonDataProvider` - Reads from JSON files
Easily extensible for database, API, CSV sources

Repository Layer
Data transformation and business rules**
php
class ModelRepository
{
    public function getModels(int $limit = 5): array
    {
        // Transforms raw data into Model objects
        // Implements pagination/limiting logic
    }
}


 Service Layer
Business logic coordination**
php
class ModelService
{
    public function getDisplayModels(): array
    {
        // Encapsulates business rules
        // Coordinates repository calls
    }
}


Controller Layer
Request handling and response coordination**
php
class PageController
{
    public function showPage(): void
    {
        // Coordinates all components
        // Handles request/response cycle
    }
}


Model Layer
Data entities with strict typing
php
class Model
{
    public function __construct(array $data)
    {
        // Type-safe property assignment
        // Data validation and transformation
    }
}

View Layer
Template rendering with data injection
php
class ViewRenderer
{
    public function render(string $template, array $data = []): string
    {
        // Secure template rendering
        // Data injection for templates
    }
}


Data Structure

Model Entity Schema
json
{
  "id": 1,
  "name": "Model Name",
  "age": 23,
  "photoUrl": "https://example.com/photo.jpg",
  "description": "Model description...",
  "services": ["Photography", "Fashion", "Commercial"]
}


Configuration Schema
php
return [
    'data' => [
        'file' => __DIR__ . '/data/models.json'
    ],
    'templates' => [
        'path' => __DIR__ . '/templates'
    ]
];


Features & Functionality

Model Display System
Card-based Layout - Responsive model cards 
Pagination Support - Configurable display limits
Data Validation - Type-safe model properties 
Error Handling - Graceful error management

Extensibility Features 
Multiple Data Sources - Easy to add DB, API, CSV providers 
Template Flexibility- Modular template system 
Configuration Management- Centralized app settings 
Service Extensibility- Easy to add new business logic

 Code Quality

PHP 8.1+ Features 
Strict Types - Type declarations throughout 
Constructor Property Promotion** - Modern PHP syntax
Named Arguments - Enhanced code readability
Union Types - Flexible type handling

SOLID Principles
Single Responsibility: Each class has one purpose
Open/Closed: Extensible without modification
Liskov Substitution: Interface implementations are interchangeable
Interface Segregation: DataProviderInterface is focused
Dependency Inversion: Depends on abstractions, not concretions

PSR Standards
PSR-4 Autoloading standard compliance
PSR-1- Basic coding standard
PSR-12 - Extended coding style guide

Extending the Application

Adding New Data Sources
php
class DatabaseDataProvider implements DataProviderInterface
{
    public function fetchAll(): array
    {
        // Database implementation
        return $this->pdo->query("SELECT * FROM models")->fetchAll();
    }
}


Adding Business Logic
php
class ModelService
{
    public function getFeaturedModels(): array
    {
        // New business logic
        return $this->repository->getModels(['featured' => true]);
    }
}


Custom Templates
php
$renderer->render('custom-layout', [
    'models' => $models,
    'title' => 'Custom Page'
]);


Development Commands

Setup & Development
bash
Install dependencies
composer install

Start development server
php -S localhost:8000

Run with custom port
php -S localhost:9000

Check syntax
php -l index.php
php -l src/**/*.php


Code Analysis
bash
 Composer validation
composer validate

Autoload optimization
composer dump-autoload --optimize

Development dependencies
composer install --dev


Potential Extensions

Framework Integration 
Convert to Laravel/Symfony structure
Add routing capabilities
Implement middleware support

Database Integration
MySQL/PostgreSQL data provider
Migration system
Active Record pattern

API Development 
RESTful API endpoints 
JSON API responses 
Authentication system

Frontend Enhancement
Vue.js/React integration
AJAX pagination
Real-time updates

Testing Infrastructure
PHPUnit test suite
Integration tests
Mock implementations

Professional Highlights

Clean Code Practices
Meaningful Naming - Self-documenting code
Small Functions - Single responsibility methods
Error Handling- Comprehensive exception management
type Safety - Strict typing throughout

 Architecture Benefits
Testability- Easy to unit test each component
Maintainability- Clear separation of concerns
Scalability Easy to extend and modify
Flexibility - Interface-driven design allows easy swapping

Production Readiness
Error Handling - Graceful degradation
Configuration - Environment-based settings
Autoloading- Industry-standard PSR-4
Documentation - Comprehensive code documentation

Learning Resources

This project demonstrates key PHP development concepts:
OOP Principles - Encapsulation, Inheritance, Polymorphism
Design Patterns - Repository, Dependency Injection
SOLID Principles- Professional development standards
Clean Architecture- Maintainable code organization
PSR Standards - PHP community best practices

License

This project is open-sourced software licensed under the [MIT license].


Developed with  focus on clean architecture and professional PHP practices**