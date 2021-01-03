using FCOC;
using FCOC.Classes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FCOC.InterManager
{
    public interface FcocInterface
    {
        IList<customers> GetAllCustomers();

        void AddCustomer(customers customer);

        void RemoveCustomer(string id);

        customers GetCustomer(string id);
        IList<suppliers> GetAllSuppliers();

        void AddSupplier(suppliers supplier);

        void RemoveSupplier(string id);

        suppliers GetSupplier(string id);
        IList<accounts> GetAllAccounts();

        void AddAccount(accounts account);

        void RemoveAccount(string id);

        accounts GetAccount(string id);
        IList<orders> GetAllOrders();

        void AddOrder(orders order);

        void RemoveOrder(string id);

        orders GetOrder(string id);
        IList<products> GetAllProducts();

        void AddProduct(products product);

        void RemoveProduct(string id);

        products GetProduct(string id);
        IList<reviews> GetAllReviews();

        void AddReview(reviews review);

        void RemoveReview(string id);

        reviews GetReview(string id);
    }
}
