node {
    stage('clone repo') {
       // git credentialsId: 'jenkinsSshKey', url: 'git@github.com:mngi-arogers/travis-broken-example.git'
       checkout scm
    }
    
    stage('unit test') {
        docker.image('phpunit/phpunit').inside {
            catchError {
                sh 'phpunit --whitelist . --coverage-clover=coverage.xml Test.php'
            }

            withCredentials([string(credentialsId: 'codeCoveRepoToken', variable: 'codeCoveRepoToken')]) {
               sh 'curl -s https://codecov.io/bash | bash -s - -t ${codeCoveRepoToken}'
            }
        }
    }
      
}
