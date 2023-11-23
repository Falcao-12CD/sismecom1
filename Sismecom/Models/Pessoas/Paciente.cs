namespace Sismecom.Models.Pessoas
{
    public class Paciente : Pessoa
    {
        public int id { get; set; }
        public string cpf { get; set; } = string.Empty;
        public string senha { get; set; } = string.Empty;
    }
}
