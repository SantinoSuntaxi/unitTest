pipeline{
    //Directivas
    agent any
   
    stages {
        // Definir las etapas del pipeline

        // stage 1. Validar la version de PHP UNIT y si esta instalado 
        stage ('Validar versión PhpUnit'){
            steps {
                sh 'phpunit --version'
            }
        }

        // Stage2 : realizar el test en base al archivo xml
        stage ('Ejecutar Tests'){
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }

        
        // Stage 3 : Desplegar los cambios en el Contenedor Docker
        stage ('Despliegue por medio de Docker'){
            steps {
                echo "Despliegue ...."
                sshPublisher(publishers: 
                [sshPublisherDesc(
                    configName: 'Controlador_Ansible', 
                    transfers: [
                        sshTransfer(
                                cleanRemote:false,
                                execCommand: 'ansible-playbook /opt/playbooks/descargarDesplegarDocker.yaml -i /opt/playbooks/hosts',
                                execTimeout: 120000
                        )
                    ], 
                    usePromotionTimestamp: false, 
                    useWorkspaceInPromotion: false, 
                    verbose: false)
                    ])
            
            }
        }
            
    }

}