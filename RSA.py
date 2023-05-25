import random

def generate_keypair(p, q):
    n = p * q
    phi_n = (p - 1) * (q - 1)
    
    while True:
        e = random.randrange(1, phi_n)
        if gcd(e, phi_n) == 1:
            break
            
    d = mod_inv(e, phi_n)
    
    public_key = (n, e)
    private_key = (n, d)
    
    return (public_key, private_key)

def encrypt_message(public_key, message):
    n, e = public_key
    cipher = [pow(ord(char), e, n) for char in message]
    
    # Save ciphertext to file
    with open("msg.txt", "w") as f:
        f.write(",".join(str(c) for c in cipher))
    
    return tuple(cipher)

def decrypt_message(private_key):
    with open("msg.txt", "r") as f:
        cipher = tuple(map(int, f.read().strip().split(',')))
    
    n, d = private_key
    message = ''.join([chr(pow(char, d, n)) for char in cipher])
    
    return message

def gcd(a, b):
    while b != 0:
        a, b = b, a % b
    return a

def mod_inv(a, m):
    gcd, x, y = extended_gcd(a, m)
    if gcd != 1:
        raise ValueError("Modular inverse does not exist")
    else:
        return x % m

def extended_gcd(a, b):
    if a == 0:
        return (b, 0, 1)
    else:
        gcd, x, y = extended_gcd(b % a, a)
        return (gcd, y - (b // a) * x, x)

def main():
    p = 1123465789 
    q = 1000000007  
    public_key, private_key = generate_keypair(p, q)

    while True:
        print("1. Encrypt Message")
        print("2. Decrypt Message")
        print("0. Exit")
        choice = int(input("Choice: "))

        if choice == 1:
            message = input("Enter a message to encrypt: ")
            cipher = encrypt_message(public_key, message)
            print("Ciphertext:", cipher)
            
        elif choice == 2:
            try:
                decrypted_message = decrypt_message(private_key)
                print("Decrypted message:", decrypted_message)
            except ValueError as e:
                print(e)
            
        elif choice == 0:
            break
        
        else:
            print("Invalid choice. Please try again.")

if __name__ == '__main__':
    main()
