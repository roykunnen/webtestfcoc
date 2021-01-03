using FCOC.Classes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FCOC.InterManager
{
    public class Manager: FcocInterface
    {
        private IList<customers> customers { get; } = new List<customers>();

        public void AddCustomer(customers customer)
        {
            customers.Add(customer);
        }

        public void RemoveCustomer(string customerid)
        {
            customers.Remove(GetCustomer(customerid));
        }

        public customers GetCustomer(string id)
        {
            return customers.FirstOrDefault(b => b.customerid == id);
        }

        public IList<customers> GetAllCustomers()
        {
            return customers;
        }
        private IList<suppliers> suppliers { get; } = new List<suppliers>();

        public void AddSupplier(suppliers supplier)
        {
            suppliers.Add(supplier);
        }

        public void RemoveSupplier(string id)
        {
            suppliers.Remove(GetSupplier(id));
        }

        public suppliers GetSupplier(string id)
        {
            return suppliers.FirstOrDefault(b => b.supplierid == id);
        }


        public IList<suppliers> GetAllSuppliers()
        {
            return suppliers;
        }


        private IList<orders> orders { get; } = new List<orders>();
        public void AddOrder(orders order)
        {
            orders.Add(order);
        }

        public void RemoveOrder(string id)
        {
            orders.Remove(GetOrder(id));
        }

        public orders GetOrder(string id)
        {
            return orders.FirstOrDefault(b => b.orderid == id);
        }


        public IList<orders> GetAllOrders()
        {
            return orders;
        }
        private IList<products> products { get; } = new List<products>();
        public void AddProduct(products product)
        {
            products.Add(product);
        }

        public void RemoveProduct(string id)
        {
            products.Remove(GetProduct(id));
        }

        public products GetProduct(string id)
        {
            return products.FirstOrDefault(b => b.productid == id);
        }


        public IList<products> GetAllProducts()
        {
            return products;
        }
        private IList<reviews> reviews { get; } = new List<reviews>();
        public void AddReview(reviews review)
        {
            reviews.Add(review);
        }

        public void RemoveReview(string id)
        {
            reviews.Remove(GetReview(id));
        }

        public reviews GetReview(string id)
        {
            return reviews.FirstOrDefault(b => b.reviewid == id);
        }


        public IList<reviews> GetAllReviews()
        {
            return reviews;
        }
        private IList<accounts> accounts { get; } = new List<accounts>();
        public void AddAccount(accounts account)
        {
            accounts.Add(account);
        }

        public void RemoveAccount(string id)
        {
            accounts.Remove(GetAccount(id));
        }

        public accounts GetAccount(string id)
        {
            return accounts.FirstOrDefault(b => b.accountid == id);
        }


        public IList<accounts> GetAllAccounts()
        {
            return accounts;
        }



    }
}
