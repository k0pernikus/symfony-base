#!/bin/sh

# Ensure host keys directory exists
if [ ! -f /etc/ssh/ssh_host_rsa_key ]; then
  echo "SSH keys not found, generating new keys..."
  ssh-keygen -A
else
  echo "Using existing SSH host keys..."
fi

# Start SSH daemon in the background
/usr/sbin/sshd


# Start PHP-FPM in the foreground
php-fpm -F