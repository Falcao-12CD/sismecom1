using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Pessoas
{
    public interface IRecepcionistaRepository
    {
        IEnumerable<Recepcionista> Listar();
        void Cadastrar(Recepcionista model);
    }
}
