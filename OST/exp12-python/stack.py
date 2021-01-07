arr=[]
top=-1
while(1):
	print("choose:")
	print("1.push 2.pop 3.top")
	ch = int(input())
	if(ch==1):
		top=top+1
		arr.insert(top,int(input("Enter num to push:")))
		print("Entered element is:",arr[top])		
	elif ch==2:
		if top == -1:
			print("STACK UNDERFLOW")
		else:
			print("popped element is ",arr[top])
			top=top-1
	else:
		if top ==-1:
			print("STACK UNDERFLOW")
		else:
			print("top element is ",arr[top])
