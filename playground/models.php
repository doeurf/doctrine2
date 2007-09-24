<?php
$models = Doctrine::loadModels('models');

$manager->setAttribute(Doctrine::ATTR_EXPORT, Doctrine::EXPORT_ALL);

$tables =   array('Entity',
                  'EntityReference',
                  'EntityAddress',
                  'Email',
                  'Phonenumber',
                  'Groupuser',
                  'Group',
                  'User',
                  'Album',
                  'Book',
                  'Author',
                  'Song',
                  'Element',
                  'Error',
                  'Description',
                  'Address',
                  'Account',
                  'Task',
                  'Resource',
                  'Assignment',
                  'ResourceType',
                  'ResourceReference');

$conn->export->exportClasses($tables);