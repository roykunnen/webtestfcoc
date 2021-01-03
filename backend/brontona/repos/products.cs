using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Runtime.Serialization;
using System.Threading.Tasks;

namespace FCOC.Classes
{
    [DataContract]
    public class products
    {

        [Key]
        [DataMember]
        public string productid { get; set; }
        [DataMember]
        public string description { get; set; }
        [DataMember]
        public string name { get; set; }
        [DataMember]
        public string category { get; set; }
        [DataMember]
        public string image { get; set; }
        [DataMember]
        public string brand { get; set; }
        [DataMember]
        public string color { get; set; }
        [DataMember]
        public string material { get; set; }
        [DataMember]
        public double salesprice { get; set; }
        [DataMember]
        public double purchaseprice { get; set; }
        [DataMember]
        public bool availibility { get; set; }
        [DataMember]
        public int size { get; set; }
        [DataMember]
        public int quantityinstock { get; set; }
    }
}
