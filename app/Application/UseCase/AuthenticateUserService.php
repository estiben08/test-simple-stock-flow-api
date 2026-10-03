<?php
namespace App\Application\UseCase;

use App\Application\Ports\Outbound\UserRepository;
use App\Application\Ports\Outbound\SecurityPorts;
use App\Application\Ports\Outbound\TokenGenerator;
use App\Application\Ports\Outbound\PasswordHasher;
use App\Domain\ValueObject\Username;
use Exception;

class AuthenticateUserService {
    public function __construct(
        private UserRepository \,
        private PasswordHasher \,
        private TokenGenerator \
    ) {}

    public function execute(string \, string \): string {
        \ = new Username(\);
        \ = \->userRepository->findByUsername(\);
        
        if (!\) throw new Exception("Credenciales invalidas");
        if (!\->hasher->verify(\, \->passwordHash())) throw new Exception("Credenciales invalidas");
        
        return \->tokenGenerator->generateFor(\);
    }
}
