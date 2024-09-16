These credentials are only needed for the ssh login to the container.
Hence, it is by design that this private key is published, as it gets mounted on the php container during startup,
so one does not need recreate the keys and have to trust different keys if the container gets destroyed.