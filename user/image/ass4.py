#!/usr/bin/env python
# coding: utf-8

# #                                             Assignment-4                                                          # 

# # Aim: To learn list and dictionary sorting and searchin with data in python. 

# ## BASIC 

# ### Q.1 Write a python program to display elements of list in reverse order.

# In[8]:


lst=['2','3','4','5','6','7']
print(lst[::-1])


# ###  Q.2 Write a python program to find biggest and smallest elements from list.

# In[12]:


lst=['2','3','4','5','6','7']
print("smallest elements from the list: ",min(lst))
print("bigest elements from the list: ",max(lst))


# ### Q.3 Write a python program to create employee list with empid, emp name and salary and perform following operations.

# ####  Sort employee list as per employee name.
# ###  Sort employee list in descending order according to their salaries.

# In[6]:


emp_id=["1","2","3","4"]
emp_name=["jinal","digu","vaishu","resham"]
emp_salary=["30000","25000","22000","15000"]
emp_name.sort()
print(emp_name)
emp_salary.sort(reverse=True)
print(emp_salary)


# 

# In[ ]:




