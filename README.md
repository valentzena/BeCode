# BeCode
Matakuliah Pemrograman Web Full Stack Developer

# ACUMALAKA
Matakuliah tentang Internal Audit dan IT Audit Series, akan mempelajari tentang bagaimana Pengelolaan Software Wuality Assurance, Integrating Testing, Security dan Audit


# git scm
Download git-scm dari https://git-scm.com/downloads <br>
Download VsCode <br>
Download Xampp

## Memasukan SSH Key
Klik dulu profil github, Klik Setting, pilih SSH and GPG keys
![image](https://github.com/user-attachments/assets/52c63cba-3aa9-4d14-86fb-2ec20e8bfdbd)

## Generate RSA Key
Just One time for first instalation of git scm, 
```sh
ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
```

## Set config global
Just One time for first instalation of git scm, 

```sh
$ git config --global user.name "John Doe"
$ git config --global user.email johndoe@example.com
```

## Get SSH Key 
to get ssh key in your computer, and put in your github or gitlab ssh key setting.

```sh
cat ~/.ssh/id_rsa.pub
```
if there is no key appears, plese generate the key also set global config of git in next section and please add the public key to your github profile.
