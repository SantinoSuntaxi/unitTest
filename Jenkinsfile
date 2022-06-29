pipeline{
    //Directives
    agent any
   
    stages {
        // Specify various stage with in stages

        // stage 1. Build
        stage ('Validar version phpUnit'){
            steps {
                sh 'phpunit --version'
            }
        }

        // Stage2 : Testing
        stage ('Realizar Tests'){
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }


        // Stage2 : Testing
        stage ('Test'){
            steps {
                echo ' testing......'

            }
        }


        
        
        
        
        
    }

}