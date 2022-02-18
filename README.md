# project-installer

How to trust local certificates on windows: https://www.thewindowsclub.com/manage-trusted-root-certificates-windows

# Troubleshoot

Remote-Containers server: Remote to local stream terminated with error: {
  message: 'connect ENOENT \\\\.\\pipe\\openssh-ssh-agent',
  name: 'Error',
  stack: 'Error: connect ENOENT \\\\.\\pipe\\openssh-ssh-agent\n' +
    '\tat PipeConnectWrap.afterConnect [as oncomplete] (net.js:1146:16)'
}

https://githubmemory.com/repo/microsoft/vscode-remote-release/issues/5184
https://code.visualstudio.com/docs/remote/containers#_using-ssh-keys